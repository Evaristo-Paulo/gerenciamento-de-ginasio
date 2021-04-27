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
                        <h2>Formulário de Actualização |<small>Funcionários</small></h2>
                        <div class="clearfix"></div>
                        @if( session('password-different') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('password-different') }}</li>
                            </ul>
                        @endif
                        @if( session('update-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('update-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('create-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('create-auth') }}</li>
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
                        @if( session('created') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('created') }}</li>
                            </ul>
                        @endif
                        @if( session('password-changed') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('password-changed') }}</li>
                            </ul>
                        @endif
                        @if( session('warning') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                            <li><i class="fa fa-warning"></i> {{ session('warning') }}</li>
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
                    <p class="message-field-required">(<span class="required">*</span>) -> Campo de preenchemento obrigatório</p>

                    <div class="x_content">
                        <br />
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                            Passo 1<br />
                                            <small>Dados pessoais</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                            Passo 2<br />
                                            <small>Contacto/Cargo</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                            Passo 3<br />
                                            <small>Endereço</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <form class="form-horizontal form-label-left" id="form" method="POST" data-parsley-validate
                                action="{{ route('worker.edit', $worker->id ) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PUT')

                                <div id="step-1">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nome
                                            Completo <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="name" value="{{  $worker->name }}" required="required" class="form-control  "
                                                name="name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="birthday">Data de Nascimento
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday"  value="{{ $worker->birthday }}" class="date-picker form-control" name="birthday"
                                                placeholder="dd-mm-yyyy" type="text" required="required" type="text"
                                                onfocus="this.type='date'" onmouseover="this.type='date'"
                                                onclick="this.type='date'" onblur="this.type='text'"
                                                onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function () {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }

                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bi" class="col-form-label col-md-3 col-sm-3 label-align">Nº
                                            BI <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="bi" required="required" class="form-control col" value="{{ $worker->bi }}" type="text" name="bi">
                                        </div>
                                    </div>
                                    <div class="form-group item">
                                        <label class="col-md-3 col-sm-3  label-align">Gênero <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            @foreach( $genders as $index => $value )
                                                <div class="checkbox">
                                                    <label for="{{ $value->type }}">
                                                        @if($value->type == $worker->gender)
                                                            <input type="radio" class="flat" checked="checked"
                                                                id="{{ $value->type }}" name="gender"
                                                                value="{{ $value->id }}">
                                                            {{ $value->type }}
                                                        @else
                                                            <input type="radio" class="flat" id="{{ $value->type }}"
                                                                name="gender" value="{{ $value->id }}">
                                                            {{ $value->type }}
                                                        @endif
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div id="step-2">
                                    
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="email" name="email" value="{{ $worker->email }}" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="phone">Telefone <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="tel" id="phone" name="phone" value="{{ $worker->phone }}" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="ocupation">Cargo á
                                            ocupar <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="select2_single form-control" required="required" tabindex="-1" id="ocupation"
                                                name="ocupation">
                                                @foreach ($ocupations as $ocupation )
                                                    @if($ocupation->name == $worker->ocupation)
                                                        <option selected value="{{  $ocupation->id }}">{{ $ocupation->name }}</option>
                                                    @else
                                                        <option value="{{  $ocupation->id }}">{{ $ocupation->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-3">
                                    
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="street">Rua <span
                                                class="required"> </span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="street" name="street" value="{{ $worker->street }}" 
                                                class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="hood">Bairro
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="hood" value="{{ $worker->hood }}" name="hood" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="municipe">Município <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="select2_single form-control" required="required" tabindex="-1" id="municipe"
                                                name="municipe">
                                                <option value="" disabled selected>Aguardando ...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="province">Província <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="select2_single form-control" required="required" tabindex="-1" id="province"
                                                name="province">
                                                <option value="" disabled selected>Selecionar província</option>
                                                @foreach ($provinces as $province )
                                                    <option value="{{  $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        <!-- End SmartWizard Content -->

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
