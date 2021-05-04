<?php

namespace App\Http\Controllers;

use App\Models\Filament;
use Illuminate\Http\Request;

class FilamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Filament::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $filament = Filament::factory()->make();
        $filament->brand = $request->brand;
        $filament->type = $request->type;
        $filament->color = $request->color;
        $filament->numberofrolls = $request->numberofrolls;
        $filament->weight = $request->weight;
        $filament->notes = $request->notes;
        $filament->status = $request->status;

        $filament->save();
        return $filament;
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
     * @param  \App\Models\Filament  $filaments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Filament::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filament  $filaments
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filament  $filament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filament = Filament::find($id);

        $filament->brand = $request->brand;
        $filament->type = $request->type;
        $filament->color = $request->color;
        $filament->numberofrolls = $request->numberofrolls;
        $filament->weight = $request->weight;
        $filament->notes = $request->notes;
        $filament->status = $request->status;


        $filament->save();
        return ($filament);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filament  $filaments
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Filament::find($id)->delete();
    }
}
