<?php

namespace App\Http\Controllers;

use App\Repositories\EventsRepository;

class EventsController extends Controller
{
    protected $viewPath = 'frontend.events.';
    /**
     * @var EventsRepository
     */
    protected $repository;

    /**
     * @param EventsRepository $repository
     */
    public function __construct(EventsRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $events = $this->repository->paginate(6);
        return view($this->viewPath . 'index',compact('events'));
    }

    public function show($slug)
    {
        return view($this->viewPath . 'show');
    }

}
