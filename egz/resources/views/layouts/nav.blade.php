 <!-- Navbar -->
 <style>
     .logo{
    width: 40%;
 }
 </style>
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="/">
        <img class="logo" src=" {{ asset('/data/img/logo.png') }} ">
      </a>


      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

         <!-- Left -->
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="courses">Courses</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="gallary">Gallary</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="contact">Contact Us</a>
            </li> -->

          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
             <!-- Facebook -->
              <a href="https://www.facebook.com/Earth-Geological-Zone-647657282233745/" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
             <!-- youtube +-->
              <a href="https://www.youtube.com/channel/UChu5dxZtOXtGIFcTTd0w3VQ" class="nav-link" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item">
             <!-- youtube +-->
              <a href="https://www.instagram.com/kartik_geologist/" class="nav-link" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
