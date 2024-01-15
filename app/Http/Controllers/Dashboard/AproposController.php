<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Apropos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AproposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apropos = Apropos::all();
        return view('dashboard.admin.apropos.index', compact('apropos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.apropos.create');
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
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'images_1' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'images_2' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'images_3' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'description' => 'required',
            'activites' => 'required',
        ]);
    
        $apropos = new Apropos();
        $apropos->title_1 = $request->input('title_1');
        $apropos->title_2 = $request->input('title_2');
        $apropos->title_3 = $request->input('title_3');
        $apropos->description = $request->input('description');
        $apropos->activites = $request->input('activites');
    
        // Upload de la première image
        $image1Name = $request->file('images_1')->getClientOriginalName();
        $path1 = $request->file('images_1')->move('public/assets/img', $image1Name);
        $apropos->images_1 = $path1;
    
        // Upload de la deuxième image
        $image2Name = $request->file('images_2')->getClientOriginalName();
        $path2 = $request->file('images_2')->move('public/assets/img', $image2Name);
        $apropos->images_2 = $path2;
    
        // Upload de la troisième image
        $image3Name = $request->file('images_3')->getClientOriginalName();
        $path3 = $request->file('images_3')->move('public/assets/img', $image3Name);
        $apropos->images_3 = $path3;
    
        $apropos->save();
    
        return redirect('partenaire/index')->with('succès', 'Une donnée a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apropos = Apropos::findOrFail($id);
        return view('dashboard.admin.apropos.show',compact('apropos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apropos = Apropos::findOrFail($id);
        return view('dashboard.admin.apropos.edit', compact('apropos'));
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
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'images_1' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'images_2' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'images_3' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'description' => 'required',
            'activites' => 'required',
        ]);
    
        $apropos = Apropos::findOrFail($id);
        $apropos->title_1 = $request->input('title_1');
        $apropos->title_2 = $request->input('title_2');
        $apropos->title_3 = $request->input('title_3');
        $apropos->description = $request->input('description');
        $apropos->activites = $request->input('activites');
    
        // Upload de la première image
        $image1Name = $request->file('images_1')->getClientOriginalName();
        $path1 = $request->file('images_1')->move('public/assets/img', $image1Name);
        $apropos->images_1 = $path1;
    
        // Upload de la deuxième image
        $image2Name = $request->file('images_2')->getClientOriginalName();
        $path2 = $request->file('images_2')->move('public/assets/img', $image2Name);
        $apropos->images_2 = $path2;
    
        // Upload de la troisième image
        $image3Name = $request->file('images_3')->getClientOriginalName();
        $path3 = $request->file('images_3')->move('public/assets/img', $image3Name);
        $apropos->images_3 = $path3;
    
        $apropos->save();
    
        return redirect('apropos/index')->with('succès', 'Une donnée a été mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apropos = Apropos::findOrFail($id);
        $apropos->delete();
        return redirect('partenaire/index')->with('succès', 'Une donnée a été modifié avec succès');
       
    }
}
