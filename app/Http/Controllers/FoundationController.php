<?php

namespace App\Http\Controllers;

use App\Models\Foundation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class FoundationController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('lista_fundaciones'), 403);
        $foundations = Foundation::paginate(5);
        return view('foundations.index', compact('foundations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('crear_fundación'), 403);
        $roles = Role::all()->pluck('name', 'id');
        return view('foundations.create', compact('roles'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Foundation $foundation)
    {

        $validaciones = request()->validate([
            'nit_fundacion' => 'required|string|max:15|unique:foundations',
            'nombre_fundacion' => 'required|string|min:3|max:20',
            'username_fundacion' => 'required|string|min:3|max:20|unique:foundations',
            'direccion_fundacion' => 'required|string|min:3|max:30',
            'foto_fundacion'=> 'required|mimes:jpg,jpeg,bmp,png',
            'email_fundacion'=> 'required|email|unique:foundations',
            'password_fundacion'=> 'required',
            ]);
            if (isset($validaciones)) {
                $foundation = new Foundation;
                $foundation->nit_fundacion = $request->nit_fundacion;
                $foundation->nombre_fundacion = $request->nombre_fundacion;
                $foundation->username_fundacion = $request->username_fundacion;
                $foundation->direccion_fundacion = $request->direccion_fundacion;
                $foundation->contacto_fundacion = $request->contacto_fundacion;
                $foundation->email_fundacion = $request->email_fundacion;
                $password_fundacion = request('password_fundacion');
                $hashed = Hash::make($password_fundacion);
                $foundation->password_fundacion = $hashed;
                $foto_fundacion = $request->file('foto_fundacion');
                $foto_fundacion->move('img/fotos', $foto_fundacion->getClientOriginalName());
                $foundation->foto_fundacion = $foto_fundacion->getClientOriginalName();
                $foundation->save();


               $roles = $request->input('roles', []);
               $foundation->asyncRole($roles);
                return redirect()->route('foundations.show', $foundation->id)->with('success', 'fundacion creada correctamente');

            }
           

    }
    //public function asyncRole(Request $request, Foundation $foundation){
    //    $validaciones = request()->validate([
       //     'roles' => 'required',
     //   ]);
       // if(isset($validaciones)){
       //     $foundation->assignRole($request->roles);
        //    return redirect()->route('foundations.show', $foundation->id);
      //  }
 //   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function show(Foundation $foundation)
    {
        abort_if(Gate::denies('ver_datos_fundación'), 403);
        $foundation->load('roles');
        return view('foundations.show', compact('foundation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function edit(Foundation $foundation)
    {
        abort_if(Gate::denies('editar_fundación'), 403);
        $roles = Role::all()->pluck('name', 'id');
        $foundation->load('roles');
        return view('foundations.edit', compact('foundation', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validaciones = request()->validate([
            'nit_fundacion' => 'sometimes|string|max:15|unique:foundations',
            'nombre_fundacion' => 'sometimes|string|min:3|max:20',
            'username_fundacion' => 'sometimes|string|min:3|max:20|unique:foundations',
            'direccion_fundacion' => 'sometimes|string|min:3|max:30',
            'foto_fundacion'=> 'sometimes|mimes:jpg,jpeg,bmp,png',
            'email_fundacion'=> 'sometimes|email|unique:foundations',
            'password_fundacion'=> 'sometimes',
            ]);
            if (isset($validaciones)) {
                $foundation->nit_fundacion = $request->nit_fundacion;
                $foundation->nombre_fundacion = $request->nombre_fundacion;
                $foundation->username_fundacion = $request->username_fundacion;
                $foundation->direccion_fundacion = $request->direccion_fundacion;
                $foundation->contacto_fundacion = $request->contacto_fundacion;
                $foundation->email_fundacion = $request->email_fundacion;
                $password_fundacion = request('password_fundacion');
                $hashed = Hash::make($password_fundacion);
                $foundation->password_fundacion = $hashed;
                if($request->hasFile('foto_fundacion')){
                    $foto_fundacion = $request->file('foto_fundacion');
                    $nombrefoto=$foto_fundacion->getClientOriginalName();
                    $foto_fundacion->move('img/fotos',$nombrefoto);
                    $foundation->foto_fundacion = $nombrefoto;
                }

            $foundation->update();
            $roles = $request->input('roles', []);
            $foundation->syncRoles($roles);

            return redirect()->route('foundations.show', $foundation->id)->with('success', 'Fundacion actualizada correctamente');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foundation  $foundation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foundation $foundation)
    {

        abort_if(Gate::denies('eliminar_fundación'), 403);

        
        
        $foundation->delete();
        return redirect()->route('foundations.index', $foundation->id)->with('succes', 'fundacion eliminada correctamente');
    }
}
