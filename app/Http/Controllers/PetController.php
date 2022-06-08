<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        abort_if(Gate::denies('lista_mascotas'), 403);
        $pets = Pet::paginate(5);
        return view('pets.index', compact('pets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('crear_mascota'), 403);
        return view('pets.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validaciones = request()->validate([
            'nombre_masc' => 'required|string|max:20',
            'edad_masc' => 'required|string|max:10',
            'raza_masc' => 'required|string|max:20',
            'tamaño_masc' => 'required|string|max:10',
            'foto_masc'=> 'required|mimes:jpg,jpeg,bmp,png',
            'sexo_masc'=> 'required|string|max:10',
            'tipo_masc'=> 'required|string|max:5',
            'descripcion_masc'=> 'required|string|max:50',
            ]);
            if (isset($validaciones)) {
                $pet = new Pet;
                $pet->nombre_masc = $request->nombre_masc;
                $pet->edad_masc = $request->edad_masc;
                $pet->raza_masc = $request->raza_masc;
                $pet->tamaño_masc = $request->tamaño_masc;
                $pet->sexo_masc = $request->sexo_masc;
                $pet->tipo_masc = $request->tipo_masc;
                $pet->descripcion_masc = $request->descripcion_masc;
                $foto_masc = $request->file('foto_masc');
                $foto_masc->move('img/fotos', $foto_masc->getClientOriginalName());
                $pet->foto_masc = $foto_masc->getClientOriginalName();
                $pet->save();

                return redirect()->route('pets.show', $pet->id)->with('success', 'mascota creada correctamente');

            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        abort_if(Gate::denies('ver_datos_mascota'), 403);
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        abort_if(Gate::denies('editar_mascota'), 403);
        return view('pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {

        $validaciones = request()->validate([
            'nombre_masc' => 'sometimes|string|max:20',
            'edad_masc' => 'sometimes|string|max:10',
            'raza_masc' => 'sometimes|string|max:20',
            'tamaño_masc' => 'sometimes|string|max:10',
            'foto_masc'=> 'sometimes|mimes:jpg,jpeg,bmp,png',
            'sexo_masc'=> 'sometimes|string|max:10',
            'tipo_masc'=> 'sometimes|string|max:5',
            'descripcion_masc'=> 'sometimes|string|max:50',
            ]);
            if (isset($validaciones)) {
                $pet->nombre_masc = $request->nombre_masc;
                $pet->edad_masc = $request->edad_masc;
                $pet->raza_masc = $request->raza_masc;
                $pet->tamaño_masc = $request->tamaño_masc;
                $pet->sexo_masc = $request->sexo_masc;
                $pet->tipo_masc = $request->tipo_masc;
                $pet->descripcion_masc = $request->descripcion_masc;
                if($request->hasFile('foto_masc')){
                    $foto_masc = $request->file('foto_masc');
                    $nombrefoto=$foto_masc->getClientOriginalName();
                    $foto_masc->move('img/fotos',$nombrefoto);
                    $pet->foto_masc = $nombrefoto;
                }

         //if(trim($request->password)=='')
        // {
        //     $data=$request->except('password');
        /// }else{
        //     $data=$request->all();
         //    $data['password']=bcrypt($request->password);
        // }
        $pet->update();
        return redirect()->route('pets.show', $pet->id)->with('success', 'mascota actualizada correctamente');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {


        abort_if(Gate::denies('eliminar_mascota'), 403);
        
       $pet->delete();

        return back()->with('succes', 'mascota eliminado correctamente');
    }
}
