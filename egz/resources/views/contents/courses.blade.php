@extends('layouts.main')
@section('title','Courses')
@section('content')
<!-- <hr class="my-5"> -->
<section>
<h3 class="h3 text-center mb-5">Courses</h3>

<!--First row-->
<div class="row features-small mb-5 mt-3 wow fadeIn">

  <!--First column-->

  <div class="col-md-6 flex-center">
  <!-- Course Detail -->
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course Fee</th>
                    <!-- <th>Available Seats</th> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>B.Sc. (All Semester)</td>
                    <td>₹ 4000</td>
                    <!-- <td>15</td> -->
                </tr>
                <tr>
                    <td>M. Sc. (All Semester)</td>
                    <td>₹ 4000</td>
                    <!-- <td>15</td> -->
                </tr>
                <tr>
                    <td>IIT-JAM & Other Entrances</td>
                    <td>₹ 5000</td>
                    <!-- <td>15</td> -->
                </tr>
                <tr>
                    <td>Foundation batch</td>
                    <td>₹ 4000</td>
                    <!-- <td>15</td> -->
                </tr>
                <tr>
                    <td>UPSC,MPSC:- Geology & Geography</td>
                    <td>₹ 5000</td>
                    <!-- <td>15</td> -->
                </tr>
                <tr>
                    <td>GSI</td>
                    <td>₹ 5000</td>
                    <!-- <td>15</td> -->
                </tr>
                </tbody>
            </table>
  </div>

  <!--/First column-->

  <!--Second column-->
  <div class="col-md-6 flex-center">
  <!-- Batches Detail -->

   <!--Zoom effect-->
   <!-- <div class="view overlay zoom">
          <img src="public\data\img\book1.png" class="img-fluid " alt="zoom"  style="width:100px; height:100px">
          <div class="mask flex-center waves-effect waves-light">
          </div>
        </div> -->

        <!-- Hoverable -->
        <img src=" {{ asset('/data/img/book1.png') }} " class="img-fluid rounded-circle hoverable" alt="hoverable" 
        style="width:80%">

  </div>
  <!--/Second column-->

</div>
<!--/First row-->

</section>
<hr class="my-5">
@endsection