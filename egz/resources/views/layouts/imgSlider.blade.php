<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url(' {{ asset('/data/img/bg-2.jpg') }} '); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4 fadeOutDownBig" style="font-family: Prosto One ">
              <strong>Earth Geological Zone</strong>
              </h1>

              <h4>
              <p class="mb-4 d-md-block animated fadeInDown">
                <strong class="" style="font-family: Stint Ultra Expanded;">"Geology teacher only because freaking awesome is not an official job title."</strong>
              </p>
              </h4>

                <!-- <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                  free tutorial
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a> -->

              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url(' {{ asset('/data/img/bg-3.jpg') }}' ); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4 fadeOutDownBig" style="font-family: Prosto One ">
                  <strong>Earth Geological Zone</strong>
              </h1>

              <h4>
                <p class="mb-4 d-md-block animated fadeInDown">
                  <strong class="" style="font-family: Stint Ultra Expanded;">"Hammer is the power of Geologist." </strong>
                </p>
              </h4>

                <!-- <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                  free tutorial
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a> -->
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <strong>Successful.</strong> {{session()->get('message')}}
                    </div>
                @endif
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('{{ asset('/data/img/bg-1.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4 fadeOutDownBig" style="font-family: Prosto One ">
                <strong>Earth Geological Zone</strong>
              </h1>

              <h4>
              <p class="mb-4 d-md-block animated fadeInDown">
                <strong class="" style="font-family: Stint Ultra Expanded;">"Geologist don't die they respawn"</strong>
              </p>
              </h4>

                  <!-- <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                    free tutorial
                    <i class="fas fa-graduation-cap ml-2"></i>
                  </a> -->
                  @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <strong>Successful.</strong> {{session()->get('message')}}
                    </div>
                @endif
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Third slide-->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
    <!-- <marquee bgcolor = "gray">Marquee with bgcolor</marquee>     -->
