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
                        <h2>Formulário de Registo |<small>Usuários</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                            method="POST" action="{{ route('user.register') }}">
                            {{ csrf_field() }}
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nome
                                    Completo
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required="required"
                                        value="{{ old('name') }}" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="email" id="email" name="email" required="required" class="form-control"
                                        value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Senha
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="password" name="password" required="required"
                                        class="form-control" value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="form-group item">
                                <label class="col-md-3 col-sm-3  label-align">Role <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    @foreach( $roles as $index => $value )
                                        <div class="checkbox">
                                            <label for="{{ $value->type }}">
                                                @if($value->type == 'User')
                                                    <input type="checkbox" class="flat" checked="checked"
                                                        id="{{ $value->type }}" name="role[]"
                                                        value="{{ $value->type }}">
                                                    {{ $value->type }}
                                                @else
                                                    <input type="checkbox" class="flat" id="{{ $value->type }}"
                                                        name="role[]" value="{{ $value->type }}">
                                                    {{ $value->type }}
                                                @endif
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                            </div>

                        </form>
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
    <link href="{{ url('painel/vendors/select2/dist/css/select2.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('painel/vendors/switchery/dist/switchery.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('painel/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
    <link href="{{ url('painel/vendors/bootstrap-daterangepicker/daterangepicker.css') }}"
        rel="stylesheet">

@endpush

@push('js')
    <script src="{{ url('painel/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}">
    </script>
    <script src="{{ url('painel/vendors/iCheck/icheck.min.js') }}"></script>
    <script
        src="{{ url('painel/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <!-- iCheck -->
    <script src="{{ url('painel/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('painel/vendors/bootstrap-daterangepicker/daterangepicker.js') }}">
    </script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ url('painel/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ url('painel/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ url('painel/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}">
    </script>
    <!-- Switchery -->
    <script src="{{ url('painel/vendors/switchery/dist/switchery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ url('painel/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ url('painel/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script
        src="{{ url('painel/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}">
    </script>
    <!-- starrr -->
    <script src="{{ url('painel/vendors/starrr/dist/starrr.js') }}"></script>
    <!-- Custom Theme Scripts -->

@endpush
