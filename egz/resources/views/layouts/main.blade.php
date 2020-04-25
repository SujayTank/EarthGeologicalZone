@include('layouts.header')

<body>

    <!-- Preloader -->

    <div class="loader_bg">
        <div class="loader">
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
    <script>
        setTimeout(function(){
        $('.loader_bg').fadeToggle();
        },4000);
    </script>

</body>

</html>
