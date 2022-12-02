<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabPagesController extends Controller
{
    public function about()
    {
        return View('about');
    }
    public function blog()
    {
        return View('blog');
    }
    public function faq()
    {
        return View('faq');
    }
}
