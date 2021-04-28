@extends('painel.template')
@section('main-content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        
        <div class="row" style="display:inline;">
            <div class="top_tiles">
                <div class="x_title">
                    @if( session('user-not-found') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('user-not-found') }}</li>
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
                    @if( session('warning') )
                        <ul class="alert alert-warning animated fadeInDown" role="alert">
                            <li><i class="fa fa-warning"></i> {{ session('warning') }}</li>
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
                <div class="animated flipInY col-lg-4 col-md-6 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-group"></i></div>
                        <div class="count">{{ $clients }}</div>
                        <p><a href="{{ route('client.list') }}">Nossos Clientes</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-6 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-female" aria-hidden="true"></i></div>
                        <div class="count">{{ $females }}</div>
                        <p><a href="{{ route('client.list') }}">Clientes Femininas</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-6 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-male"></i> </div>
                        <div class="count">{{  $males }}</div>
                        <p><a href="{{ route('client.list') }}">Clientes Masculinos</a></p>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>
<!-- /page content -->

@endsection

@section('menu-aside')
@include('painel.partials.relatory-client-aside')
@endsection

@push('css')

@endpush

@push('js')

@endpush
