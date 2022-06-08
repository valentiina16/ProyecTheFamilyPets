@extends('layouts.main', ['activePage' => 'pets', 'titlePage' => 'Nuevo Mascota'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('pets.store') }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Mascota</h4>
              <p class="card-category">Ingresar datos de la nueva mascota</p>
            </div>
 <div class="card-body">
            <!--End header-->
            <!--Body-->
           {{-- Nombre--}}
           <div class="row">
            <label for="nombre_masc" class="col-sm-2 col-form-label">Nombre mascota</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="nombre_masc" placeholder="Ingresa nombre de la mascota" value="{{ old('nombre_masc') }}">
                @if ($errors->has('nombre_masc'))<span class="error text-danger" for="input-nombre_masc">{{ $errors->first('nombre_masc') }}</span>
              @endif
              </div>
          </div>

          {{-- Edad--}}
          <div class="row">
            <label for="edad_masc" class="col-sm-2 col-form-label">Edad mascota</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="edad_masc" placeholder="Ingresa edad mascota: 1 año" value="{{ old('edad_masc') }}">
                @if ($errors->has('edad_masc'))<span class="error text-danger" for="input-edad_masc">{{ $errors->first('edad_masc') }}</span>
              @endif
              </div>
          </div>

           {{-- Raza--}}
        <div class="row">
          <label for="raza_masc" class="col-sm-2 col-form-label">Raza mascota</label>
          <div class="col-sm-7">
              <input type="text" class="form-control" name="raza_masc" placeholder="Ingresa raza" value="{{ old('raza_masc') }}">
              @if ($errors->has('raza_masc'))<span class="error text-danger" for="input-raza_masc">{{ $errors->first('raza_masc') }}</span>
            @endif
            </div>
        </div>

         {{-- Tamaño--}}
         <div class="row">
          <label for="tamaño_masc" class="col-sm-2 col-form-label">Tamaño mascota</label>
          <div class="col-sm-7">
              <input type="text" class="form-control" name="tamaño_masc" placeholder="Ingresa tamaño: grande, mediano o pequeño" value="{{ old('tamaño_masc') }}">
              @if ($errors->has('tamaño_masc'))<span class="error text-danger" for="input-tamaño_masc">{{ $errors->first('tamaño_masc') }}</span>
            @endif
            </div>
        </div>

         {{-- sexo--}}
         <div class="row">
          <label for="sexo_masc" class="col-sm-2 col-form-label">Sexo mascota</label>
          <div class="col-sm-7">
              <input type="text" class="form-control" name="sexo_masc" placeholder="Ingresa sexo: macho o hembra" value="{{ old('sexo_masc') }}">
              @if ($errors->has('sexo_masc'))<span class="error text-danger" for="input-sexo_masc">{{ $errors->first('sexo_masc') }}</span>
            @endif
            </div>
        </div>

         {{-- tipo--}}
         <div class="row">
          <label for="tipo_masc" class="col-sm-2 col-form-label">Tipo mascota</label>
          <div>
            <select name="tipo_masc" style="text-align: center">
                <option selected="true" disabled>Sleccione un Tipo</option>
                <option>Gato</option>
                <option>Perro</option>
            </select>
        </div>
        <div>

         {{-- descripcion--}}
         <div class="row">
          <label for="descripcion_masc" class="col-sm-2 col-form-label">Descripción mascota</label>
          <div class="col-sm-7">
              <input type="text" class="form-control" name="descripcion_masc" placeholder="Ingresa descripcion" value="{{ old('descripcion_masc') }}">
              @if ($errors->has('descripcion_masc'))<span class="error text-danger" for="input-descripcion_masc">{{ $errors->first('descripcion_masc') }}</span>
            @endif
            </div>
        </div>

         {{-- Foto--}}
         <div class="row">
            <label for="foto_masc" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-7">
                <input accept="image/*" type="file" class="form-control" name="foto_masc" value="{{ old('foto_masc') }}" onchange="vistaPrevia(event)">
                @if ($errors->has('foto_masc'))<span class="error text-danger" for="input-foto_masc">{{ $errors->first('foto_masc') }}</span>
              @endif

              </div>
            <div class="imagen col-md-6 col-lg-6 col-sm-12 contenedor_foto">
                <label for="">Vista previa fotografia</label><br>
                <img class="FotoF" src="" id="img-foto" alt="">
            </div>
          </div>


         {{-- cita--}}


            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    function ocultarAlerta() {
        document.querySelector(".alert").style.display

        = 'none';
    }
    setTimeout(ocultarAlerta, 3000);
    // vista previa de la imagen
    let vistaPrevia = () => {
            let leerImg = new FileReader();

            let id_img = document.getElementById('img-foto');

                leerImg.onload = () => {
                    if (leerImg.readyState == 2) {
                        id_img.src = leerImg.result;
                    }
                }
                leerImg.readAsDataURL(event.target.files[0])
            }
</script>
@endsection
