<div class="modal-wrapper">
    <form class="modal-full-body" action="{{ route('user.change.password') }}" method="POST">
        {{ csrf_field() }}

        <div class="x_title">
            <h2>Alteração de Senha |<small>Usuários</small></h2>
            <div class="clearfix"></div>
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
                <input type="password" id="password" name="password" required="required" class="form-control"
                    value="{{ old('password') }}">
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password-same">Repetir senha
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="password" id="password-same" name="password-same" required="required" class="form-control"
                    value="{{ old('password-same') }}">
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
