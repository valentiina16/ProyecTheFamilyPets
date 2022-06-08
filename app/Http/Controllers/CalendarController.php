<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;



class CalendarController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  abort_if(Gate::denies('user_index'), 403);
        $calendars = Calendar::paginate(5);
        return view('calendars.index', compact('calendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calendars.create');
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
            'titulo_evento' => 'required',
            'descripcion_evento' => 'required',
            'start' => 'required',
            'end' => 'required',
           
            ]);
            if (isset($validaciones)) {
                $calendar = new Calendar;
                $calendar->titulo_evento = $request->titulo_evento;
                $calendar->descripcion_evento = $request->descripcion_evento;
                $calendar->start = $request->start;
                $calendar->end = $request->end;
                $calendar->save();
                return redirect()->route('calendars.show', $calendar->id)->with('success', 'fundacion creada correctamente');

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        //
        return view('calendars.show', compact('calendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {
        return view('calendars.edit', compact('calendar'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar)
    {
        $validaciones = request()->validate([
            'titulo_evento' => 'sometimes',
            'descripcion_evento' => 'sometimes',
            'start' => 'sometimes',
            'end' => 'sometimes',
           
            ]);
            if (isset($validaciones)) {
                $calendar = new Calendar;
                $calendar->titulo_evento = $request->titulo_evento;
                $calendar->descripcion_evento = $request->descripcion_evento;
                $calendar->start = $request->start;
                $calendar->end = $request->end;
               
                $calendar->update();
                return redirect()->route('calendars.show', $calendar->id)->with('success', 'Fundacion actualizada correctamente');

            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        //
        $calendar->delete();
        return redirect()->route('calendars.index', $calendar->id)->with('succes', 'fundacion eliminada correctamente');
    }
}
