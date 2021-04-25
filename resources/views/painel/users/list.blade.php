@extends('painel.template')
<!-- page content -->
@section('main-content')
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Listagem |<small>Usuários</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable-responsive"
                                        class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Opção</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger</td>
                                                <td>t.nixon@datatables.net</td>
                                                <td>Admin</td>
                                                <td>
                                                    < class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i> Remover</button>
                                                </td>
                                            </tr>
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
            <li><a><i class="fa fa-gears"></i> Usuário <span class="fa fa-chevron-down"></span></a>
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
    <link href="{{ url('painel/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('painel/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link
        href="{{ url('painel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}"
        rel="stylesheet">



@endpush

@push('js')
    <script src="{{ url('painel/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('painel/vendors/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ url('painel/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ url('painel/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ url('painel/vendors/datatables.net/js/jquery.dataTables.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/datatables.net-buttons/js/buttons.print.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ url('painel/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ url('painel/vendors/pdfmake/build/vfs_fonts.js') }}"></script>


@endpush
