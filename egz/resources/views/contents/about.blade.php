
@extends('layouts.main')
@section('title','About Us')
@section('content')
 
 
 <!--Section: Main features & Quick Start-->
 <!-- <hr class="my-5"> -->
 <section >

<h3 class="h3 text-center mb-5">About</h3>

<!--Grid row-->
<div class="row wow fadeIn">

  <!--Grid column-->
  <div class="col-lg-6 col-md-12 px-4">

    <!--First row-->
    <div class="row">
      <div class="col-1 mr-3">
        <!-- <i class="fas fa-code fa-2x indigo-text"></i> -->
      </div>
      <div class="col-10">
        <!-- <h5 class="feature-title">Bootstrap 4</h5> -->
        
        <p class="grey.darken-1">Geology is an earth science which deals with the study of internal and outernal parts of earth materials like rocks, minerals, and fossils etc.</p>
      </div>
    </div>
    <!--/First row-->

    <!--Second row-->
    <div class="row">
      <div class="col-1 mr-3">
        <!-- <i class="fas fa-book fa-2x blue-text"></i> -->
      </div>
      <div class="col-10">
        <!-- <h5 class="feature-title">Detailed documentation</h5> -->
        <p class="grey.darken-1">Geology describes the structure of the earth on and beneath/below its surface.
          easily.
        </p>
      </div>
    </div>
    <!--/Second row-->

    <!--Third row-->
    <div class="row">
      <div class="col-1 mr-3">
        <!-- <i class="fas fa-graduation-cap fa-2x cyan-text"></i> -->
      </div>
      <div class="col-10">
        <!-- <h5 class="feature-title">Lots of tutorials</h5> -->
        <p class="grey.darken-1">Geologists used a different methods to describe earth's structure and evolution including Field works, lab works, geophysical and geological techniques.</p>
      </div>
    </div>
    <!--/Third row-->

    <!--forth row-->
    <div class="row">
      <div class="col-1 mr-3">
        <!-- <i class="fas fa-graduation-cap fa-2x cyan-text"></i> -->
      </div>
      <div class="col-10">
        <!-- <h5 class="feature-title">Lots of tutorials</h5> -->
        <p class="grey.darken-1">Important instruments used by Geologist are GPS, Brunton Compass, Clinometer, Rotameter, Microscopes(In lab) and Stereoscope (In lab)etc.</p>
      </div>
    </div>
    <!--/forth row-->

    <!--forth row-->
    <div class="row">
      <div class="col-1 mr-3">
        <!-- <i class="fas fa-graduation-cap fa-2x cyan-text"></i> -->
      </div>
      <div class="col-10">
        <!-- <h5 class="feature-title">Lots of tutorials</h5> -->
        <p class="grey.darken-1">Applications of Geology:-
ONGC, OFI, GSI, GSDA, DGM, SAIL, Minnings, Research, Lectureship, and other private companies.</p>
      </div>
    </div>
    <!--/forth row-->

  </div>
  <!--/Grid column-->

  <!--Grid column-->
  <div class="col-lg-6 col-md-12">

    <p class="h5 text-center mb-4">Watch our Geological based video</p>
    <div class="embed-responsive embed-responsive-16by9">
      <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/" allowfullscreen></iframe> -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/oJAxHHmRt48" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div style="padding: 40px; text-align: center;">
    @include('contents.aboutMe')
    </div>
  </div>
 
  <!--/Grid column-->

</div>
<!--/Grid row-->

</section>
<!--Section: Main features & Quick Start-->
<hr class="my-5">
@endsection