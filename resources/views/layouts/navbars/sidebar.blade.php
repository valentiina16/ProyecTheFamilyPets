<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
        <img src="{{asset('img/Logotipo.png')}}" alt="image" class="avatar" style="width: 40px; height:40px">
      {{ __('TheFamilyPets') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
        @can('tablero_home')
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Tablero') }}</p>
        </a>
      </li>
      @endcan
     {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>--}}
      @can('lista_usuarios')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route ('users.index') }}">
          <i class="material-icons">person</i>
            <p>Usuarios</p>
        </a>
      </li>

      @endcan
     @can('listar_permisos')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route ('permissions.index') }}">
          <i class="material-icons">note_alt</i>
            <p>Permisos</p>
        </a>
      </li>
    @endcan
      @can('listar_roles')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">note_alt</i>
            <p>Roles</p>
        </a>
      </li>
     @endcan

     @can('lista_mascotas')
     <li class="nav-item{{ $activePage == 'pets' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('pets.index') }}">
          <i class="material-icons">pets</i>
            <p>Mascotas</p>
        </a>
      </li>
      @endcan


      @can('lista_fundaciones')
      <li class="nav-item{{ $activePage == 'foundations' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('foundations.index') }}">
          <i class="material-icons">villa</i>
            <p>Fundaciones</p>
        </a>
      </li>
      @endcan


      @can('lista_calendarios')
      <li class="nav-item{{ $activePage == 'calendars' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('calendars.index') }}">
          <i class="material-icons">event_available</i>
            <p>Calendario</p>
        </a>
      </li>
      @endcan


    </ul>
  </div>
</div>
