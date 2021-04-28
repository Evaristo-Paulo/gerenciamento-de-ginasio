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
                        <h2>Formulário de Registo |<small>Pagamentos</small></h2>
                        <div class="clearfix"></div>
                        @if( session('password-different') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('password-different') }}
                                </li>
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
                                <li><i class="fa fa-warning"></i> {{ session('error-exception') }}
                                </li>
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
                    <p class="message-field-required">(<span class="required">*</span>) -> Campo de preenchemento
                        obrigatório</p>

                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                            method="POST" action="{{ route('payment.register') }}">
                            {{ csrf_field() }}
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="client">Cliente <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="select2_single form-control" tabindex="-1" required="required"
                                        id="client" name="client">
                                        <option value="" disabled selected>Selecionar cliente</option>
                                        @foreach($clients as $client )
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Valor (kz)
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" id="value" name="value"
                                        value="{{ old('value') }}" class="form-control "
                                        required="required">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="month">Mês <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="select2_single form-control" tabindex="-1" required="required"
                                        id="month" name="month">
                                        <option value="" disabled selected>Selecionar mês</option>
                                        @foreach($months as $month )
                                            <option value="{{ $month->id }}">{{ $month->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Ano
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" id="year" name="year"
                                        value="{{ old('year') }}" class="form-control "
                                        required="required">
                                </div>
                            </div>
                            <div class="form-group item">
                                <label class="col-md-3 col-sm-3  label-align">Estado <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <div class="checkbox">
                                        <label for="pagamento-no-prazo">
                                            <input type="radio" class="flat" checked="checked" id="pagamento-no-prazo"
                                                name="status" value="Pagamento no prazo">
                                            Pagamento no prazo
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="liquidacao-da-divida">
                                            <input type="radio" class="flat" id="liquidacao-da-divida"
                                                name="status" value="Liquidação da dívida">
                                                Liquidação da dívida
                                        </label>
                                    </div>
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
