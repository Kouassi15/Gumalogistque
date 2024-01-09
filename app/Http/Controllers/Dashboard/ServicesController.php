<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('ok');
        $services = Service::all();
         return view('dashboard.admin.services.liste',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   dd('ok');
         return view('dashboard.admin.services.createservices');
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
            'title' => 'required',
            'images_services' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        
        $services = new Service();
        $services->title = $request->input('title');
        
        // Uplaoder une image 
        $imageName = $request->file('images_services')->getClientOriginalName();
        $path = $request->file('images_services')->move('public/assets/img', $imageName);
        $services->images_services = $path;
        
        $services->save();
        
        return redirect('dashboard/liste')->with('succès', 'Un service a été enregistré avec succès');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Service::findOrFail($id);
        return view('dashboard.admin.services.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('dashboard.admin.services.edit',compact('services'));
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
            'title' => 'required',
            'images_services' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);
        
        $services = Service::findOrFail($id);
        $services->title = $request->input('title');
        
        // Uplaoder une image 
        $imageName = $request->file('images_services')->getClientOriginalName();
        $path = $request->file('images_services')->move('public/assets/img', $imageName);
        $services->images_services = $path;
        
        $services->update();
        
        return redirect('dashboard/liste')->with('succès', 'Un service a été enregistré avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();
        return redirect('dashboard/liste')->with('success', 'Service supprimé avec succès');

    }
}
