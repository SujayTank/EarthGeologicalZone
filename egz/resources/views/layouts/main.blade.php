@include('layouts.header')

<body>

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
