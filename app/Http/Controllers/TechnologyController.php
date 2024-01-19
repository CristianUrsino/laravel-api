<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\technology;
use App\Http\Requests\StoretechnologyRequest;
use App\Http\Requests\UpdatetechnologyRequest;
use Illuminate\Support\Str;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::All();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretechnologyRequest $request)
    {
        $formData = $request->validated();
        $slug = Str::slug($formData['name'], '-');
        $formData['slug'] = $slug;
        $technology = Technology::create($formData);
        return redirect()->route('admin.technologies.show', $technology->slug);
    }

    /**
     * Display the specified resource.
     */
    public function show(technology $technology)
    {
        return view('admin.technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetechnologyRequest $request, technology $technology)
    {
        $formData = $request->validated();
        $slug = Str::slug($formData['name'], '-');
        $formData['slug'] = $slug;
        $technology->update($formData);
        return redirect()->route('admin.technologies.show', $technology->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(technology $technology)
    {
        $technology->delete();
        return redirect()->route('admin.technologies.index');
    }
}