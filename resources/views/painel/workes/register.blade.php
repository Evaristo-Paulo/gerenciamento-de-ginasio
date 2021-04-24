@extends('painel.template')
@section('main-content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Registo de Funcionário</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- Smart Wizard -->
                        <p>(<span class="required">*</span>) -> Campo de preenchemento obrigatório</p>
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
                                            <small>Endereço</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                            Passo 3<br />
                                            <small>Fotografia</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="step-1">
                                <form class="form-horizontal form-label-left">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="nome">Nome Completo <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="nome" required="required"
                                                class="form-control  " name="nome">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nascimento">Data de Nascimento
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="nascimento" class="date-picker form-control" name="nascimento"
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
                                            BI</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="bi" class="form-control col" type="text"
                                                name="bi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Gênero</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <p>
                                                M:
                                                <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                                                <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="email">Email
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="email" name="email" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="telefone">Telefone <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="tel" id="telefone" name="telefone" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>


                                </form>

                            </div>
                            <div id="step-2">
                                <form class="form-horizontal form-label-left">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="provincia">Província <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="select2_single form-control" tabindex="-1" id="provincia" name="provincia">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA" selected>California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="municipio">Município <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="select2_single form-control" tabindex="-1" id="municipio" name="municipio">
                                                <option selected>Selecionar município</option>
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA" selected>California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="bairro">Bairro <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="bairro" name="bairro" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="rua">Rua <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="rua" name="rua" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-3">
                                <form class="form-horizontal form-label-left">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="cargo">Cargo á ocupar <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="select2_single form-control" tabindex="-1" id="cargo" name="cargo">
                                                <option selected>Selecionar cargo</option>
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA" selected>California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for=""
                                            class="col-form-label col-md-3 col-sm-3 label-align">Salário (kz)</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="" class="form-control col" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="foto">Fotografia</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="file" id="foto" name="foto" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                </form>
                            </div>

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
<link href="{{  url('painel/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

@endpush

@push('js')
    <script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- jQuery Smart Wizard -->
    <script src="{{ url('painel/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}">
    </script>
    <script src="{{  url('painel/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ url('painel/vendors/iCheck/icheck.min.js') }}"></script>

	<script src="{{  url('painel/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
	<!-- iCheck -->
	<script src="{{  url('painel/vendors/moment/min/moment.min.js') }}"></script>
	<script src="{{ url('painel/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="{{  url('painel/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
	<script src="{{  url('painel/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
	<script src="{{ url('painel/vendors/google-code-prettify/src/prettify.js') }}"></script>
	<!-- jQuery Tags Input -->
	<script src="{{  url('painel/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
	<!-- Switchery -->
	<script src="{{  url('painel/vendors/switchery/dist/switchery.min.js') }}"></script>
	<!-- Select2 -->
	<script src="{{  url('painel/vendors/select2/dist/js/select2.full.min.js') }}"></script>
	<!-- Parsley -->
	<script src="{{  url('painel/vendors/autosize/dist/autosize.min.js') }}"></script>
	<!-- jQuery autocomplete -->
	<script src="{{  url('painel/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
	<!-- starrr -->
	<script src="{{  url('painel/vendors/starrr/dist/starrr.js') }}"></script>
	<!-- Custom Theme Scripts -->

@endpush
