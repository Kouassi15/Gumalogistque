<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Equipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view('dashboard.admin.equipes.index',compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.equipes.create');
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
            'nom_membre' => 'required',
            'poste_membre' => 'required',
            'diplome_membre' => 'required',
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'images1' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'images2' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);
    
        $equipes = new Equipe();
        $equipes->nom_membre = $request->input('nom_membre');
        $equipes->poste_membre = $request->input('poste_membre');
        $equipes->diplome_membre = $request->input('diplome_membre');
        $equipes->title1 = $request->input('title1');
        $equipes->title2 = $request->input('title2');
        $equipes->title3 = $request->input('title3');
        
        // Upload de la première image
        $image1Name = $request->file('images1')->getClientOriginalName();
        $path1 = $request->file('images1')->move('public/assets/img', $image1Name);
        $equipes->images1 = $path1;
    
        // Upload de la deuxième image
        $image2Name = $request->file('images2')->getClientOriginalName();
        $path2 = $request->file('images2')->move('public/assets/img', $image2Name);
        $equipes->images2 = $path2;
    
        // Upload de la troisième image
        // $image3Name = $request->file('images_3')->getClientOriginalName();
        // $path3 = $request->file('images_3')->move('public/assets/img', $image3Name);
        // $apropos->images_3 = $path3;
    
        $equipes->save();
    
        return redirect('equipe/index')->with('succès', 'Une équipe a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipes = Equipe::findOrFail($id);
        return view('dashboard.admin.equipes.show',compact('equipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipes = Equipe::findOrFail($id);
        return view('dashboard.admin.equipes.edit', compact('equipes'));
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
        // dd('ok');
        $request->validate([
            'nom_membre' => 'required',
            'poste_membre' => 'required',
            'diplome_membre' => 'required',
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'images1' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'images2' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);
        
    
        $equipes = Equipe::findOrFail($id);
        $equipes->nom_membre = $request->input('nom_membre');
        $equipes->poste_membre = $request->input('poste_membre');
        $equipes->diplome_membre = $request->input('diplome_membre');
        $equipes->title1 = $request->input('title1');
        $equipes->title2 = $request->input('title2');
        $equipes->title3 = $request->input('title3');
        
        // Upload de la première image
        $image1Name = $request->file('images1')->getClientOriginalName();
        $path1 = $request->file('images1')->move('public/assets/img', $image1Name);
        $equipes->images1 = $path1;
    
        // Upload de la deuxième image
        $image2Name = $request->file('images2')->getClientOriginalName();
        $path2 = $request->file('images2')->move('public/assets/img', $image2Name);
        $equipes->images2 = $path2;
    
        // Upload de la troisième image
        // $image3Name = $request->file('images_3')->getClientOriginalName();
        // $path3 = $request->file('images_3')->move('public/assets/img', $image3Name);
        // $apropos->images_3 = $path3;
    
        $equipes->save();
    
        return redirect('equipe/index')->with('succès', 'Une équipe a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipes = Equipe::findOrFail($id);
        $equipes->delete();
        return redirect('equipe/index')->with('succès', 'Une équipe a été supprimé avec succès');
    }
}
