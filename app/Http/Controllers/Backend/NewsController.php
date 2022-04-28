<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\NewsRepository;

class NewsController extends Controller
{

    /**
     * @var string
     */
    protected $viewPath = 'backend.news.';
    /**
     * @var NewsRepository
     */
    protected $repository;
    /**
     * @var string
     */
    protected $routePath = 'admin.news.';

    public function __construct(NewsRepository $repository)
    {

        $this->repository = $repository;
    }

    public function create()
    {
        return view($this->viewPath . 'create');
    }

    public function index()
    {
        return view($this->viewPath . 'index');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
