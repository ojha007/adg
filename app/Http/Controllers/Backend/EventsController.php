<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Events;
use App\Repositories\EventsRepository;
use App\Traits\FileUpload;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventsController extends Controller
{
    use FileUpload;

    /**
     *
     * @var string
     */
    protected $viewPath = 'backend.events.';
    /**
     * @var EventsRepository
     */
    protected $repository;
    /**
     * @var string
     */
    protected $routePath = 'admin.events.';

    public function __construct(EventsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create()
    {
        return view($this->viewPath . 'create');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $events = $this->repository->paginate(20);
        return view($this->viewPath . 'index', compact('events'));
    }

    /**
     * @param EventRequest $request
     * @return RedirectResponse
     */
    public function store(EventRequest $request): RedirectResponse
    {
        try {
            $attributes = $request->validated();
            $file = $request->file('image');
            $attributes['image'] = $this->uploadFile($file, 'events');
            $event = $this->repository->create($attributes);
            return redirect()
                ->route('admin.events.show', $event->slug)
                ->with('success', 'Event added successfully');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->withInput()
                ->with('failed', 'Failed to add events.');
        }
    }

    public function show(Events $event)
    {
        return view($this->viewPath . 'show', compact('event'));
    }

    public function edit(Events $event)
    {
        return view($this->viewPath . 'edit', compact('event'));
    }

    public function update()
    {

    }

    public function destroy($id): RedirectResponse
    {
        $this->repository->delete($id);
        return redirect()
            ->back()
            ->with('success', 'Event deleted successfully');

    }
}
