<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $projects = Project::query()
            ->select('id', 'name', 'body', 'is_public')
            ->when(!auth()->check(), fn($query) => $query->where('is_public', true))
            ->latest()
            ->paginate(9);

        return view('project.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProjectRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->validated());

        return to_route('project.show', $project);
    }

    /**
     * Display the specified resource.
     *
     * @param  Project  $project
     * @return Application|Factory|View
     */
    public function show(Project $project)
    {
        if ($project->is_public) {
            return view('project.show', [
                'project' => $project
            ]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project
     * @return Application|Factory|View
     */
    public function edit(Project $project)
    {
        return view('project.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProjectRequest  $request
     * @param  Project  $project
     * @return RedirectResponse
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());

        return to_route('project.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project  $project
     * @return RedirectResponse
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return back();
    }
}
