<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper">
        <a class="left-sidebar-toggle" href="#">Primary Header</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider pt-2">Menú</li>
                        <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                            <a href="{{ route('home') }}">
                                <i class="icon zmdi zmdi-home"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
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
                         <li class="{{ (request()->is('dependencies*')) ? 'active' : '' }}">
                            <a href="{{ route('dependencies.index') }}">
                                {{-- <i class="icon fas fa-briefcase-medical"></i> --}}
                                <i class="icon fas fa-hospital-alt"></i>
                                <span>Áreas</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('causes*')) ? 'active' : '' }}">
                            <a href="{{ route('causes.index') }}">
                                <i class="icon fas fa-book-medical"></i>
                                <span>Causes</span>
                            </a>
                        </li>
                        {{-- <li class="{{ (request()->is('doctors*')) ? 'active' : '' }}">
                            <a href="{{ route('doctors.index') }}">
                                <i class="icon fas fa-stethoscope"></i>
                                <span>Diagnósticos</span>
                            </a>
                        </li> --}}
                        <li class="{{ (request()->is('patients*')) ? 'active' : '' }}">
                            <a href="{{ route('patients.index') }}">
                                <i class="icon zmdi zmdi-male-female"></i>
                                <span>Pacientes</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('dates*')) ? 'active' : '' }}">
                            <a href="{{ route('dates.index') }}">
                                <i class="icon fas fa-ambulance"></i>
                                <span>Urgencias</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('users*')) ? 'active' : '' }}">
                            <a href="{{ route('users.index') }}">
                                <i class="icon zmdi zmdi-account-circle"></i>
                                <span>Usuarios</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
