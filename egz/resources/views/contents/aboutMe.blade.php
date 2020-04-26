<!-- Button trigger modal-->
<button type="button" class="btn blue-gradient" data-toggle="modal" data-target="#modalCart">About Me</button>
<!-- Modal: modalCart -->
<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog cascading-modal modal-avatar" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <img src=" {{ asset('/data/img/pic.jpeg') }} " alt="avatar" class="rounded-circle img-responsive">
      </div>

      <!--Body-->

      <div class="modal-body">
      <h4 class="mt-1 mb-2"><b>Mr. Kartik P. Tiwari<b></h4>
        <h6>B.Sc.(PCH,CHE,GOG), M.Sc.(Geology)</h6>
        <p class="lead font-italic"></p>
        <p class="lead font-italic">Attended three international conferences</p>
        <p class="lead font-italic">District coordinator of geological association of Maharashtra</p>
        <p class="lead font-italic">Presented Research Paper At Suresh Gyan Vihar  University, Jaipur (Rajasthan)</p>
      </div>
      <!--Footer-->
      <div class="modal-footer">

     <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>

     {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="red-text">&times;</span>
    </button> --}}
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->
