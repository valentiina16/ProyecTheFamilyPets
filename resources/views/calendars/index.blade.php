@extends('layouts.main', ['activePage' => 'calendars', 'titlePage' => 'calendario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Calendario</h4>
                                <p class="card-category">Agendas registradas</p>
                            </div>
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('calendars.create') }}" class="btn btn-sm btn-facebook">Añadir fecha</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th>ID</th>
                    <th>nombre del evento</th>
                    <th>descripcion</th>
                    <th>fecha inicio</th>
                    <th>fecha final</th>
                    
                    <th class="text-right">Acciones</th>
                </thead>
                <tbody>
                  @forelse ($calendars as $calendar)
                  <tr>
                    <td>{{$calendar->id}} </td>
                                                    <td>{{$calendar->titulo_evento}}</td>
                                                    <td>{{$calendar->descripcion_evento}}</td>
                                                    <td>{{$calendar->start}}</td>
                                                    <td>{{$calendar->end}}</td>
                                                   
                    <td class="td-actions text-right">
                      <a href="{{ route('calendars.show', $calendar->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                      <a href="{{ route('calendars.edit', $calendar->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                      <form action="{{ route('calendars.destroy', $calendar->id) }}" method="post"
                        onsubmit="return confirm('estas seguro de eliminar esta fundacion')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $calendars->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $calendars->links() }}
          </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
@endsection
