<!-- JQuery -->
<script type="text/javascript" src=" {{ asset('/data/js/jquery-3.4.1.min.js') }} "></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src=" {{ asset('/data/js/popper.min.js') }} "></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src=" {{ asset('/data/js/bootstrap.min.js') }} "></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src=" {{ asset('/data/js/mdb.min.js') }} "></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <!-- JS for Gallary -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
        <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            }); 
        </script>