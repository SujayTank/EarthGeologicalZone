<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- google Font -->
  <link href='https://fonts.googleapis.com/css?family=Prosto One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stint Ultra Expanded' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Artifika' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <link href=" {{ asset('/data/css/bootstrap.css') }} " rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href=" {{ asset('/data/css/mdb.css') }} " rel="stylesheet">
  <!-- Your Gallary CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
  <!-- Your custom styles (optional) -->
  <link href=" {{ asset('/data/css/style.css') }} " rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

     /* Preloader */
   .loader_bg{
    background: rgb(209, 209, 209);
      z-index: 9999;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
  }

.loader{
      z-index: 9999;
      position: fixed;
      top: 45%;
      left: 45%;
}
.loader:before, .loader:after{
    content: '';
    border: 1em solid #d0641c;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}
.loader:before{
    animation-delay: .5s;
}
@keyframes loader{
    0%{
        transform: scale(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
   100%{
        transform: scale(1);
        opacity: 0;
    }
}

  </style>
