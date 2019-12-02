<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper">
        <a class="left-sidebar-toggle" href="#">Primary Header</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider pt-2">Menú</li>
                        {{-- @canany(['home'], auth()->user()) --}}
                        @if (auth()->user()->hasRole('analist') || auth()->user()->hasRole('admin'))
                            <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                            <a href="{{ route('home.index') }}">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon zmdi zmdi-home"></i>
                                    </div>
                                    <span>Inicio</span>
                                </div>
                            </a>
                        </li>
                        @endif
                        <li class="{{ (request()->is('dates*')) ? 'active' : '' }}">
                            <a href="{{ route('dates.index') }}">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon fas fa-ambulance"></i>
                                    </div>
                                    <span>Urgencias</span>
                                </div>
                            </a>
                        </li>
                        <li class="{{ (request()->is('patients*')) ? 'active' : '' }}">
                            <a href="{{ route('patients.index') }}">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon zmdi zmdi-male-female"></i>
                                    </div>
                                    <span>Pacientes</span>
                                </div>
                            </a>
                        </li>
                        
                        {{-- @endcanany --}}
                        {{-- <li class="parent">
                            <a href="#">
                                <i class="icon zmdi zmdi-face"></i>
                                <span>Dropdown</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ (request()->is('ui/alerts')) ? 'active' : '' }}">
                                    <a href="#">Elemento 1</a>
                                </li>
                                <li class="{{ (request()->is('ui/buttons')) ? 'active' : '' }}">
                                    <a href="#">Elemento 2</a>
                                </li>
                                <li class="{{ (request()->is('ui/cards')) ? 'active' : '' }}">
                                    <a href="#">
                                        <span class="badge badge-primary float-right">New</span>
                                        Elemento 3
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @can('view-icons')
                            <li class="{{ (request()->is('icons')) ? 'active' : '' }}">
                                <a href="{{ route('icons') }}">
                                    <i class="icon zmdi zmdi-collection-image-o"></i>
                                    <span>Ver íconos de la plantilla</span>
                                </a>
                            </li>
                        @endcan
                        <li class="divider">Divididor</li> --}}
                        @canany(['view', 'create', 'update',  'delete'], auth()->user())
                        <li class="{{ (request()->is('dependencies*')) ? 'active' : '' }}">
                            <a href="{{ route('dependencies.index') }}">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon fas fa-hospital-alt"></i>
                                    </div>
                                    <span>Áreas</span>
                                </div>
                            </a>
                        </li>
                        @endcanany
                        @canany(['view','create', 'update',  'delete'], auth()->user())
                        <li class="{{ (request()->is('causes*')) ? 'active' : '' }}">
                            <a href="{{ route('causes.index') }}">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon fas fa-book-medical"></i>
                                    </div>
                                    <span>Causes</span>
                                </div>
                            </a>
                        </li>
                        @endcanany
                        @canany(['create', 'update',  'delete'], auth()->user())
                            <li class="{{ (request()->is('users*')) ? 'active' : '' }}">
                            <a href="{{ route('users.index') }}">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="icon zmdi zmdi-account-circle"></i>
                                    </div>
                                    <span>Usuarios</span>
                                </div>
                            </a>
                        </li>
                        {{-- @elsecanany(['create'], App\Post::class)
                            // The current user can create a post --}}
                        @endcanany
                        {{-- @can('users')
                        
                        @endcan --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
