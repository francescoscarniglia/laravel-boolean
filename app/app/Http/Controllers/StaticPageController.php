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
<<<<<<< HEAD
      return view('static-pages.privacy');
=======
      // return view
>>>>>>> master
    }

    // faq
    public function faq() {
<<<<<<< HEAD
      return view('static-pages.faq');
=======
      // return view
>>>>>>> master
    }
}
