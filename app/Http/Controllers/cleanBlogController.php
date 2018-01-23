<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cleanBlogController extends Controller
{
	public function index() {
		return view('layout/index');
	}

	public function about_us() {
		return view('layout/about_us');
	}

	public function post() {
		return view('layout/post');
	}

	public function contact() {
		return view('layout/contact');
	}
}