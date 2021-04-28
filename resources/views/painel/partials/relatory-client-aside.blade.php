
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <a href="{{ route('home') }}"><h3>Home</h3></a>
    </div>
    <div class="menu_section">
        <a href="#"><h3>Relatório de clientes</h3></a>
        <ul class="nav side-menu">
            <li><a href="{{ route('client.relatories')}}"><i class="fa fa-group"></i> Clientes <span class=""></span></a>
            </li>
            <li><a href="{{ route('payment.relatories')}}"><i class="fa fa-ticket" aria-hidden="true"></i> Ficha de pagamento <span class=""></span></a>
            </li>
            <li><a href="{{ route('historic.relatories')}}"><i class="fa fa-file-text-o"></i> Histórico <span class=""></span></a>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->