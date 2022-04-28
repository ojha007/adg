<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{

    protected $viewPath = 'frontend.news.';

    public function index()
    {
        return view($this->viewPath . 'index');
    }

    public function show($slug)
    {
        return view($this->viewPath . 'show');
    }
}
