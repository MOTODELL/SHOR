<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Primary Header</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="#"><i class="icon zmdi zmdi-home"></i><span>Inicio</span></a>
                        </li>
                        <li class="parent"><a href="#"><i class="icon zmdi zmdi-face"></i><span>Dropdown</span></a>
                            <ul class="sub-menu">
                                <li class="{{ (request()->is('ui/alerts')) ? 'active' : '' }}"><a href="#">Elemento 1</a>
                                </li>
                                <li class="{{ (request()->is('ui/buttons')) ? 'active' : '' }}"><a href="#">Elemento 2</a>
                                </li>
                                <li class="{{ (request()->is('ui/cards')) ? 'active' : '' }}"><a href="#"><span class="badge badge-primary float-right">New</span>Elemento 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider">Divididor</li>
                        @can('view-icons')
                            <li class="{{ (request()->is('/icons')) ? 'active' : '' }}"><a href="{{ route('icons') }}"><i class="icon zmdi zmdi-collection-image-o"></i><span>Ver íconos de la plantilla</span></a>
                        @endcan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
                <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
            </div>
        </div>
    </div>
</div>