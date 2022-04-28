<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Repositories\NewsRepository;
use App\Traits\FileUpload;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{

    use FileUpload;

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


    /**
     * @param NewsRequest $request
     * @return RedirectResponse
     */
    public function store(NewsRequest $request): RedirectResponse
    {
        try {
            $attributes = $request->validated();
            $attributes['created_by'] = auth()->id();
            $file = $request->file('image');
            $attributes['image'] = $this->uploadFile($file, 'news');
            $news = $this->repository->create($attributes);
            $message = getMessage('CREATED', 'News');
            return redirect()
                ->route('admin.news.show', $news->slug)
                ->with('success', $message);
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('failed', getMessage('OOPS'))
                ->withInput();
        }
    }

    public function create()
    {
        return view($this->viewPath . 'create');
    }

    public function index()
    {
        $allNews = $this->repository->paginate(10);
        return view($this->viewPath . 'index', compact('allNews'));
    }

    public function show(News $news)
    {
        return view($this->viewPath . 'show', compact('news'));
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy($id): RedirectResponse
    {
        $this->repository->delete($id);
        return redirect()
            ->back()
            ->with('success', getMessage('DELETED', 'News'));
    }
}
