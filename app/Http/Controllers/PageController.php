<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function pages()
    {
        return view('pages');
    }

    public function contact()
    {
        return view('contact');
    }
}