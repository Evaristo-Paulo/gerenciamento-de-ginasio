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
                        <h2>Listagem |<small>Funcionários</small></h2>
                        <div class="clearfix"></div>
                        @if( session('create-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('create-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('update-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('update-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('edit-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('edit-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('delete-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('delete-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('warning') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('warning') }}</li>
                            </ul>
                        @endif
                        @if( session('user-not-found') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('user-not-found') }}</li>
                            </ul>
                        @endif
                        @if( session('error') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('error') }}</li>
                            </ul>
                        @endif
                        @if( session('error-exception') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('error-exception') }}</li>
                            </ul>
                        @endif
                        @if( session('password-different') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('password-different') }}</li>
                            </ul>
                        @endif
                        @if( session('updated') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('updated') }}</li>
                            </ul>
                        @endif
                        @if( session('deleted') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('deleted') }}</li>
                            </ul>
                        @endif
                        @if( session('password-changed') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('password-changed') }}</li>
                            </ul>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                                                <th>Gênero</th>
                                                <th>Telefone</th>
                                                <th>Cargo</th>
                                                <th>Endereço</th>
                                                <th class="option-title">Opção</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($workers as $worker)
                                                <tr>
                                                    <td>{{ $worker->name }}</td>
                                                    <td>{{ $worker->gender }}</td>
                                                    <td>{{ $worker->phone }}</td>
                                                    <td>{{ $worker->ocupation }}</td>
                                                    <td>{{ $worker->municipe }}, {{ $worker->hood }}</td>
                                                    <td class="option-data">
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> <span class="option-title">Detalhar</span></a>
                                                        @can('delete')
                                                            @if ($worker->id == Auth::user()->id)
                                                                <a href="#" class="btn btn-info"><i class="fa fa-refresh"
                                                                aria-hidden="true"></i> <span class="option-title">Actualizar</span></a>
                                                                <button class="btn btn-danger"><i
                                                                    class="fa fa-trash-o" aria-hidden="true"></i>
                                                                    <span class="option-title">Remover</span></button>
                                                            @else
                                                            <a href="{{ route('worker.edit.form', $worker->id ) }}" class="btn btn-info"><i class="fa fa-refresh"
                                                                aria-hidden="true"></i> <span class="option-title">Actualizar</span></a>
                                                            <form action="{{ route('worker.remove') }}"
                                                            method="POST" style="display: inline">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="element"
                                                                    value="{{ $worker->id }}">
                                                                <button class="btn btn-danger" type="submit"><i
                                                                        class="fa fa-trash-o" aria-hidden="true"></i>
                                                                        <span class="option-title">Remover</span></button>
                                                            </form>
                                                            @endif 
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6">
                                                        <h3>Sem funcionários registados</h3>
                                                    </td>
                                                </tr>
                                            @endforelse
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
@include('painel.partials.aside-origin')
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
    <script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>
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
