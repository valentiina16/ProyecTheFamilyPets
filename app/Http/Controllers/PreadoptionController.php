<?php

namespace App\Http\Controllers;

use App\Models\Preadoption;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Calendar;
use Illuminate\Http\Request;

class PreadoptionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $preadoption= new Preadoption();
        $preadoption->fecha_solic = $request->fecha_solic;
        $preadoption->estado_masc = $request->estado_masc;
        $preadoption->id_pet = $request->id_pet;
        $preadoption->id_user = $request->id_user;
        $preadoption->save();
        return redirect()->route('adopcion');
    }

    public function getPet(Pet $pet){
        $user = User::find(Auth::user()->id);
        $calendarios = Calendar::all();
        Return view('preadoption.create', compact('pet','calendarios', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function show(Preadoption $preadoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function edit(Preadoption $preadoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preadoption $preadoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preadoption $preadoption)
    {
        //
    }
}
