<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Materiel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterielsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiels = Materiel::all();
        return view('dashboard.admin.materiels.index',compact('materiels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.materiels.create');
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
            'qte' => 'required',
            'images_materiels' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        
        $materiels = new Materiel();
        $materiels->nom = $request->input('nom');
        $materiels->qte = $request->input('qte');
        // Uplaoder une image 
        $imageName = $request->file('images_materiels')->getClientOriginalName();
        $path = $request->file('images_materiels')->move('public/assets/img', $imageName);
        $materiels->images_materiels = $path;
        
        $materiels->save();
        
        return redirect('materiel/index')->with('succès', 'Un Materiel a été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materiels = Materiel::findOrFail($id);

        return view('dashboard.admin.materiels.show',compact('materiels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materiels = Materiel::findOrFail($id);

        return view('dashboard.admin.materiels.edit',compact('materiels'));
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
            'qte' => 'required',
            'images_materiels' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);
        
        $materiels = Materiel::findOrFail($id);
        $materiels->nom = $request->input('nom');
        $materiels->qte = $request->input('qte');
        // Uplaoder une image 
        $imageName = $request->file('images_materiels')->getClientOriginalName();
        $path = $request->file('images_materiels')->move('public/assets/img', $imageName);
        $materiels->images_materiels = $path;
        
        $materiels->update();
        
        return redirect('materiel/index')->with('succès', 'Un Materiel a été enregistré avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materiels = Materiel::findOrfail($id);
        $materiels->delete();

        return redirect('materiel/index')->with('succès', 'Un Materiel a été supprimé avec succès');

    }
}
