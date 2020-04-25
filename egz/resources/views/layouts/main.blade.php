@include('layouts.header')

<body>

    <!-- Preloader -->
    <!--Big blue-->
    <div class="preloader-wrapper big active crazy">
        <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div>
        <div class="gap-patch">
            <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
            <div class="circle"></div>
        </div>
        </div>
    </div>
  <!-- Preloader -->
  <!-- Navbar -->
  @include('layouts.nav')
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  @include('layouts.imgSlider')
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">

      @yield('content')

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  @include('layouts.footer')
  <!--/.Footer-->

  <!-- SCRIPTS -->
  @include('layouts.scripts')
</body>

</html>
