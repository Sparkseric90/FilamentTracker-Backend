<?php

namespace App\Http\Controllers;

use App\Models\Filaments;
use Illuminate\Http\Request;

class FilamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Filaments::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filaments = Filaments::factory()->make();
        $filaments->brands = $request->brands;

        $filaments->save();
        return $filaments
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filaments  $filaments
     * @return \Illuminate\Http\Response
     */
    public function show(Filaments $filaments)
    {
        return Filaments::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filaments  $filaments
     * @return \Illuminate\Http\Response
     */
    public function edit(Filaments $filaments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filaments  $filaments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filaments $filaments)
    {
        $filaments = Filaments::find($id);

        $filaments->brand = $request->brand;
        $filaments->color = $request->color;
        $filaments->numberofrolls = $request->numberofrolls;
        $filaments->status = $request->status;

        $filaments->save();
        return $filaments;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filaments  $filaments
     * @return \Illuminate\Http\Response
     */
    public function delete(Filaments $filaments)
    {
        Filaments::find($id)->delete();
    }
}
