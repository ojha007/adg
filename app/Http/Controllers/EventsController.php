<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    protected $viewPath = 'frontend.events.';

    public function index()
    {
        return view($this->viewPath . 'index');
    }

    public function show($slug)
    {
        return view($this->viewPath . 'show');
    }

}
