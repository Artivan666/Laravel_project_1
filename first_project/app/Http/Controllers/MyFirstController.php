<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index() {
        return '<h1>Main page</h1>';
    }
}
