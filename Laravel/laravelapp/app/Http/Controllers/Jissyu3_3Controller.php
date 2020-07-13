<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu3_3Controller extends Controller
{
  public function index()
  {
    $version = [
      ['version' => 'v1', 'release' => '2011年6月'],
      ['version' => 'v2', 'release' => '2011年11月'],
      ['version' => 'v3', 'release' => '2012年2月'],
      ['version' => 'v4', 'release' => '2013年5月'],
      ['version' => 'v5', 'release' => '2015年2月'],
      ['version' => 'v6', 'release' => '2019年9月'],
      ['version' => 'v7', 'release' => '2020年3月']
    ];
    return view(' jissyu3_3.index', ['version' => $version]);
  }
}
