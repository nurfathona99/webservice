<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

Public function index($kode)
{
    return view ('test', compact('kode'));
}

}

