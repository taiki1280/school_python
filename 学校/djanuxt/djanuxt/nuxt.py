from django.http import HttpResponse
from django.views.generic import View
from .apps import DjanuxtConfig as config
import os
import re
import urllib.request
import mimetypes
import json


class NuxtView(View):
    # Constractor
    def __init__(self):
        pass

    # GET Request
    def get(self, request, *args, **kwargs):
        response = self.nuxt(request, *args, **kwargs)
        return response

    # POST Request
    def post(self, request, *args, **kwargs):
        response = self.nuxt(request, *args, **kwargs)
        return response

    # Nuxt
    def nuxt(self, request, *args, **kwargs):
        content = None
        # Dispatch
        dispatch = None
        if (config.nuxt_debug or config.nuxt_mode == "ssr"
                or config.nuxt_mode == "universal"):
            dispatch = config.nuxt_url + config.nuxt_base
        else:
            dispatch = config.nuxt_dir + "/dist/"

        # Path
        path = None
        if (request.path.startswith(config.nuxt_base)):
            path = re.sub(rf"^{config.nuxt_base}", "", request.path)
            if (len(path) != 0):
                dispatch = re.sub(r"/$", "", dispatch)
                dispatch = f"{dispatch}/{path}"

        # Parameters
        method = request.method
        parameters = {}
        request_method = getattr(request, method)
        for key in request_method:
            parameters[key] = request_method[key]

        # Load Content
        try:
            if (re.match(r"^https?://", dispatch) is not None):
                content = self.__redirect(method, dispatch, parameters)
            else:
                dispatch = re.sub(r"/$", "", dispatch)
                if (os.path.isdir(dispatch)):
                    dispatch += "/index.html"
                else:
                    dispatch = self.__vuefile(dispatch)

                with open(dispatch, "r") as file:
                    content = file.read()
        except Exception as ex:
            content = ex

        # Mime Type
        mime_type = mimetypes.guess_type(dispatch)[0]
        if (mime_type is None):
            mime_type = "text/html"
        if (hasattr(content, "object")):
            content = content.object

        return HttpResponse(content, content_type=mime_type)

    # Redirect
    def __redirect(self, method: str, url: str, params: dict):
        content = None

        # Build Request
        request = None
        if (method == "GET"):
            request = urllib.request.Request("{0}?{1}".format(
                url, urllib.parse.urlencode(params)),
                                             method="GET")
        elif (method == "POST"):
            header = {"Content-Type": "application/json"}
            parameters = json.dumps(params).encode()
            request = urllib.request.Request(url,
                                             parameters,
                                             header,
                                             method="POST")

        # Send & Recv
        opener = urllib.request.build_opener(
            urllib.request.HTTPCookieProcessor())
        with opener.open(request) as response:
            content = response.read().decode('utf-8')

        return content

    # Search Vue Index.html
    def __vuefile(self, filename: str):
        vuefile = filename

        path, ext = os.path.splitext(vuefile)
        if (len(ext) == 0):
            basename = os.path.basename(vuefile)
            indexfile = re.sub(rf"{basename}$", "index.html", vuefile)
            if (os.path.isfile(indexfile)):
                vuefile = indexfile
            else:
                upper_dir = re.sub(rf"/{basename}$", "", vuefile)
                root_dir = config.nuxt_dir + "/dist"
                if (len(root_dir) <= len(upper_dir)):
                    vuefile = self.__vuefile(upper_dir)
        return vuefile