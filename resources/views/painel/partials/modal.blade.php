<!-- Alterar Senha -->

<div class="modal-wrapper" id="user-new-password">
    <form class="modal-full-body" action="{{ route('user.change.password') }}" method="POST">
        {{ csrf_field() }}

        <div class="x_title">
            <h2>Alteração de Senha |<small>Usuários</small></h2>
            <div class="clearfix"></div>
            <p class="message-field-required">(<span class="required">*</span>) -> Campo de preenchemento obrigatório</p>
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
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Nova senha
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="password" id="password" name="password"  minlength="6" required="required" class="form-control"
                    value="{{ old('password') }}">
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password-same">Confirma senha
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="password" id="password-same" name="password-same" minlength="6" required="required" class="form-control"
                    value="{{ old('password-same') }}">
                    <p class="validation-same-password"></p>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
        <button class="close-modal"><i class="fa fa-times" aria-hidden="true"></i></button>
    </form>
</div>

<!-- Alterar Fotografia -->
<div class="modal-wrapper" id="worker-new-photo">
    <form class="modal-full-body"  action="{{ route('worker.change.photo') }}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="x_title">
            <h2>Alteração de Fotografia |<small>Funcionários</small></h2>
            <div class="clearfix"></div>
            <p class="message-field-required">(<span class="required">*</span>) -> Campo de preenchemento obrigatório</p>
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
            <label class="col-form-label col-md-3 col-sm-3 label-align"
                for="photo">Fotografia <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
                <input type="file" id="photo" name="photo" required="required"
                    class="form-control ">
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
        <button class="close-modal"><i class="fa fa-times" aria-hidden="true"></i></button>
    </form>
</div>
