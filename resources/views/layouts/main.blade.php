@include('partials.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('home') }}" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.name', 'Laravel') }}</span></a>
            </div>

            <div class="clearfix"></div>

            @include('partials.profile-quick')

            <br />

            @include('partials.sidebar')
          </div>
        </div>

        @include('partials.top-nav')

        @yield('body')

        @include('partials.footer')
      </div>
    </div>

    @include('partials.js')
  </body>
  
</html>
