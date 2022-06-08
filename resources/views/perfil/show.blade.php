@extends('layouts.perfil', [ 'titlePage' =>'Perfil'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Perfil</h4>
                                <p class="card-category">{{$user->name}}</p>
                            </div>

                            <div class="card1">
                                <div class="card-body">
                             @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif</div>
                                <div style="width: 350px">
                                    <div >
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <div class="author">

                                                        <a href="">
                                                            <img class="FotoF" src="{{asset('img/fotos/' .$user->foto_usuario)}}" id="img-foto" alt="">
                                                            <h5 class="title mt-3">{{$user->name}}</h5>
                                                        </a>
                                                        <p class="description">
                                                            {{$user->apellido}} <br>
                                                            {{$user->direccion_usuario}} <br>
                                                            {{$user->cedula}} <br>
                                                            {{$user->celular_usuario}} <br>
                                                            {{$user->username}} <br>
                                                            {{$user->email}} <br>
                                                            {{$user->created_at}} <br>
                                                       

                                                        </p>
                                                        
                                                    </div>
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-container">
                                                    <a href="{{ url('/')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                   <a href="{{ route('perfil.edit', $user->id) }}"><button  class="btn btn-sm btn-primary">Editar</button > </a> 
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 350px">
                                    <div >
                                        <div class="card card-user">
                                            <div class="card-body">
                                                
                                                <form class="navbar-form">
                                                    <div>
                                                        <select  name="id_user" hidden id="userFilter" style="text-align: center">
                                                            <option selected="true">{{$user->id}}</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                <button type="submit" class="btn btn-danger" >
                                                      Buscar
                                                      <div class="ripple-container"></div>
                                                    </button>

                                                    <a type="button" class="btn btn-danger" onclick="ActivarCampo()">Mostrar</a>
                                                </div>
                                                  </form>
                                                
                                                  <div class="table-responsive" id="adop" style="display: none" >
                                                    <table class="table" name="adopciones">
                                                        <thead class="text-primary">
                                                            <th>Fecha</th>
                                                            <th>Estado</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pets as $pet)
                                                            <tr>
                                                                <td>{{$pet->fecha_solic}}</td>
                                                                <td>{{$pet->estado_masc}}</td>
                                                                
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function ActivarCampo(){
        var contenedor = document.getElementById("adop");
        contenedor.style.display="block";
        return true;
    }
</script>


@endsection 