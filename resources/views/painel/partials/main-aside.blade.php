<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span>Vambora!<span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Evaristo Paulo</span>
                <h2>Admin</h2>
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