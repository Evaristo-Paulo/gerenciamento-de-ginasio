
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <a href="{{ route('home') }}"><h3>Home</h3></a>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Funcionário <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @can('create')
                    <li><a href="{{  route('worker.register.form') }}">Registo</a></li>
                    @endcan
                    <li><a href="{{  route('worker.list') }}">Listagem</a></li>
                    <li><a href="#" class="modal-alteracao-fotografia">Alterar fotografia</a></li>
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
            <li><a><i class="fa fa-gears"></i> Usuário <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @can('create')
                    <li><a href="{{ route('user.register.form') }}">Registo</a></li>
                    @endcan
                    <li><a href="{{ route('user.list') }}">Listagem</a></li>
                    @can('create')
                    <li><a href="#" class="modal-alteracao-senha">Alteração de Senha</a></li>
                    @endcan
                </ul>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->