<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apartment;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::where('user_id', Auth::user()->id)->orderBy('name', 'asc')->get();
        return view('admin.apartments.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] = Apartment::generateSlug($request->name) . '-' . Auth::user()->id;

        $request['apartment_id'] = Auth::user()->id;

        $newApartment = Apartment::create($request);

        return redirect()->route('admin.apartments.show', ['apartment' => $newApartment->slug]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartments
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        if (Auth::user()->id == $apartment->user_id){
            return view('admin.apartments.show', compact('apartment'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartments
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        if (Auth::user()->id == $apartment->user_id) {
            return view('admin.apartments.edit', compact('apartment'));
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $apartments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        $request['slug'] = Apartment::generateSlug($request->name);

        $request['slug'] = $request['slug'] . '-' . $apartment->id;

        $apartment->update($request);

        return redirect()->route('admin.apartments.show', ['apartment' => $apartment->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
       
        $apartment->delete();
        return redirect()->route('admin.apartments.index');
    }
}
