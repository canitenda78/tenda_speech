<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(Request $request)
    {
        return view('layouts/new-master'); //new-masterという名前のビューを返す
    }
}