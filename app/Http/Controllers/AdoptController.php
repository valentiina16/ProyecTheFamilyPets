<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;


class AdoptController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $pet = Pet::filter($request)->get();

        return view('adopcion', array('pet' => $pet));
}

    


}
