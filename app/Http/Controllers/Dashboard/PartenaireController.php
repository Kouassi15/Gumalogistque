<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return view('dashboard.admin.partenaires.index',compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.partenaires.create');
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
            'nom' => 'required',
            'images' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);

        $partenaires = new Partenaire();
        $partenaires->nom = $request->input('nom');
        
        // Uplaoder une image 
        $imageName = $request->file('images')->getClientOriginalName();
        $path = $request->file('images')->move('public/assets/img', $imageName);
        $partenaires->images = $path;
        
        $partenaires->save();
        
        return redirect('partenaire/index')->with('succès', 'Un Partenaire a été ajouter avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partenaires = Partenaire::findOrFail($id);
        return view('dashboard.admin.partenaires.show',compact('partenaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partenaires = Partenaire::findOrFail($id);
        return view('dashboard.admin.partenaires.edit',compact('partenaires'));
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
        $request->validate([
            'nom' => 'required',
            'images' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);

        $partenaires = Partenaire::findOrFail($id);
        $partenaires->nom = $request->input('nom');
        
        // Uplaoder une image 
        $imageName = $request->file('images')->getClientOriginalName();
        $path = $request->file('images')->move('public/assets/img', $imageName);
        $partenaires->images = $path;
        
        $partenaires->save();
        
        return redirect('partenaire/index')->with('succès', 'Un Partenaire a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partenaires = Partenaire::findOrFail($id);
        $partenaires->delete();
        return redirect('partenaire/index')->with('succès', 'Un Partenaire a été modifié avec succès');
    }
}
