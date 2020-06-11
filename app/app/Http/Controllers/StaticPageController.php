<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // home page
    public function index() {
      return view('static-pages.index');
    }

    // privacy
    public function privacy() {
      // return view
    }

    // faq
    public function faq() {
      // return view
    }
}
