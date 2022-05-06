<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.project.index', [
            "title" => "project",
            "projects" => Project::latest()->get()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'mitra' => 'required|max:255',
            'lokasi' => 'required',
            'tahun' => 'required|numeric|min:1900|max:2099',
            'image' => 'image|file|max:2048',

        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('img/project');
            // $imageName = time() . '.' . $file->getClientOriginalName();
            // $validated['image'] = $request->image->move(public_path('images'), $imageName);
        }



        Project::create($validated);

        return redirect('/dashboard/project')->with('success', 'New post has been added');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('dashboard.project.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $validated = [
            'judul' => 'required|max:255',
            'mitra' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tahun' => 'required|numeric|min:1900|max:2099',
            'image' => 'image|file|max:2048',

        ];



        $validatedData = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img/project');
        }


        Project::where('id', $project->id)
            ->update($validatedData);

        return redirect('/dashboard/project')->with('success', 'Project has been edited');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::delete($project->image);
        }
        Project::destroy($project->id);


        return redirect('/dashboard/project')->with('success', 'Project has been deleted');
        //
    }
}
