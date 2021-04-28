<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <div class="site_title"><a href="{{ route('home') }}" class="title-tiny">Painel de controle</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
            </div>
            <div class="profile_info aside-menu-fixed">
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        @yield('menu-aside')
        <!-- /menu footer buttons -->
        @include('painel.partials.aside-footer')
        <!-- /menu footer buttons -->
    </div>
</div>