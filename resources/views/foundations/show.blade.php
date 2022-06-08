@extends('layouts.main', ['activePage' => 'foundations', 'titlePage' => 'Detalles de la fundacion'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">fundaciones</h4>
                                <p class="card-category">Vista dellada de la fundacion {{$foundation->nombre_fundacion}}</p>
                            </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
            <div class="row">
              <!-- first -->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">

                        <a href="#">
                            <img class="FotoF" src="{{asset('img/fotos/' .$foundation->foto_fundacion)}}" id="img-foto" alt="">
                          <h5 class="title mt-3">{{ $foundation->nombre_fundacion}}</h5>
                        </a>
                        <p class="description">
                            {{$foundation->nit_fundacion}} <br>
                            {{$foundation->direccion_fundacion}}<br>
                            {{$foundation->username_fundacion}} <br>
                            {{$foundation->email_fundacion}} <br>
                            {{$foundation->contacto_fundacion}} <br>
                            {{ $foundation->role }} <br>

                          </p>
                          <p>
                              @forelse ($foundation->roles as $role)
                                <span class="badge badge-info">{{ $role->name }}</span>
                              @empty
                                <span class="badge badge-danger">No roles</span>
                              @endforelse
                          </p>
                      </div>
                  </p>
              </div>
                  <div class="card-footer">
                    <div class="button-container">
                        <a href="{{ route('foundations.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                      <button type="submit" class="btn btn-sm btn-primary">Editar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
</div>
@endsection
