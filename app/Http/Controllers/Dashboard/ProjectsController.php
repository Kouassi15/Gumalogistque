<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Project::all();

        return view('dashboard.admin.projets.liste',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.projets.createprojet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titles' => 'required',
            'images_projects' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        
        $projets = new Project();
        $projets->titles = $request->input('titles');
        
        // Uplaoder une image 
        $imageName = $request->file('images_projects')->getClientOriginalName();
        $path = $request->file('images_projects')->move('public/assets/img', $imageName);
        $projets->images_projects = $path;
        
        $projets->save();
        
        return redirect('dashboard/listeprojects')->with('succès', 'Un Projet a été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projets = Project::findOrFail($id);
        return view('dashboard.admin.projets.show', compact('projets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projets = Project::findOrFail($id);
        return view('dashboard.admin.projets.edit',compact('projets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'titles' => 'required',
            'images_projects' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $projets = Project::findOrFail($id);
        $projets->titles = $request->input('titles');
        
        // Uplaoder une image 
        $imageName = $request->file('images_projects')->getClientOriginalName();
        $path = $request->file('images_projects')->move('public/assets/img', $imageName);
        $projets->images_projects = $path;
        
        $projets->save();
        
        return redirect('dashboard/listeprojects')->with('succès', 'Un Projet a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projets = Project::FindOrFail($id);
        $projets->delete();
        return redirect('dashboard/listeprojects')->with('succès', 'Un Projet a été supprimé avec succès');
    }
}
