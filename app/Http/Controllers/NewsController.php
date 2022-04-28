<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;

class NewsController extends Controller
{

    protected $viewPath = 'frontend.news.';
    /**
     * @var NewsRepository
     */
    protected $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view($this->viewPath . 'index');
    }

    public function show($slug)
    {
        $news = $this->repository->findBySlug($slug);
        $otherNews = $this->repository->other3News($slug);
        return view($this->viewPath . 'show', compact('news', 'otherNews'));
    }
}
