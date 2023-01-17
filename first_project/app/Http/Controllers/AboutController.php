<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about');
    }

}
