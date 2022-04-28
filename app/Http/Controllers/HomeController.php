<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Repositories\EventsRepository;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    protected $viewPath = 'frontend.';

    public function index()
    {
        $events = (new EventsRepository(new Events()))->paginate(3);
        return view($this->viewPath . 'index', compact('events'));
    }

    public function aboutUs(): Renderable
    {
        return view('frontend.about-us');
    }

    public function supportUs(): Renderable
    {
        return view('frontend.support-us');
    }

    public function contactUs(): Renderable
    {
        return view('frontend.contact-us');
    }

    public function teams(): Renderable
    {
        return view('frontend.teams');
    }
}
