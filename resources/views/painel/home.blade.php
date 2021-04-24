@extends('painel.template')
@section('main-content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row" style="display:inline;">
            <div class="top_tiles">
                <div class="animated flipInY col-lg-4 col-md-6 col-sm-6 ">
                    <div class="tile-stats"> 
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">179</div>
                        <p><a href="#">Nossos Funcionários</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-6 col-sm-6 ">
                    <div class="tile-stats"> 
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">179</div>
                        <p><a href="#">Nossos Clientes</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-6 col-sm-6 ">
                    <div class="tile-stats"> 
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">179</div>
                        <p><a href="#">Clientes com Dívida</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection

@section('menu-aside')
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Home</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Funcionário <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="index.html">Registo</a></li>
                    <li><a href="index2.html">Listagem</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Cliente <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="general_elements.html">Registo</a></li>
                    <li><a href="media_gallery.html">Listagem</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Relatório</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Funcionário </a></li>
            <li><a><i class="fa fa-bug"></i> Cliente </a></li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Controle de Acesso</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Usuário <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="e_commerce.html">Registo</a></li>
                    <li><a href="projects.html">Listagem</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->
@endsection

@push('css')

@endpush

@push('js')

@endpush
