@extends('layouts.main', ['activePage' => 'pets', 'titlePage' => 'Detalles de la mascota'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">mascotas</h4>
                                <p class="card-category">Vista dellada de la mascota {{$pet->nombre_masc}}</p>
                            </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">

            @if (session('success'))
            <div class="alert alert-success">
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

                        <a href="">
                            <img class="FotoF" src="{{asset('img/fotos/' .$pet->foto_masc)}}" id="img-foto" alt="">
                            <h5 class="title mt-3">{{$pet->nombre_masc}}</h5>
                        </a>
                        <p class="description">
                            {{$pet->edad_masc}} <br>
                            {{$pet->raza_masc}} <br>
                            {{$pet->tamaño_masc}} <br>
                            {{$pet->sexo_masc}} <br>
                            {{$pet->tipo_masc}} <br>
                            {{$pet->descripcion_masc}} <br>
                          {{ $pet->created_at }}
                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                        <a href="{{ route('pets.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
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
  </div>
</div>
@endsection
