from dotenv import load_dotenv
from django.apps import AppConfig
from . import settings
import os
load_dotenv(verbose=True)


class DjanuxtConfig(AppConfig):
    name = "djanuxt"
    # Nuxt
    nuxt_dir = settings.BASE_DIR + "/nuxt"
    nuxt_mode = os.environ.get('NUXT_MODE')
    nuxt_url = os.environ.get('NUXT_URL')
    nuxt_base = os.environ.get('NUXT_BASE')
    nuxt_debug = True if os.environ.get('NUXT_DEBUG') == "true" else False
