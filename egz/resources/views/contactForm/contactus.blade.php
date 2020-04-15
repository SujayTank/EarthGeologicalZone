@extends('layouts.main')
@section('title','Contact Us')
@section('content')
<!-- <hr class="my-5"> -->


<section>
    <h3 class="h3 text-center mb-5">Contact Us</h3>

    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-9 mb-md-0 mb-5">

        {{-- @if (!session()->has('message')) --}}

        <form action="/contact" method="POST">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="contact-name" class="form-control" name="name" value="{{ old('name') }}">
                  <label for="contact-name" class="">Your name</label>
                </div>
                
                <div>{{ $errors -> first('name') }}</div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="contact-email" class="form-control" name="email" value="{{ old('email') }}">
                  <label for="contact-email" class="">Your email</label>
                </div>
                <div>{{ $errors -> first('email') }}</div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input type="text" id="contact-Subject" class="form-control" name="subject" value="{{ old('subject') }}">
                  <label for="contact-Subject" class="">Subject</label>
                </div>
                <div>{{ $errors -> first('subject') }}</div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-12">
                <div class="md-form">
                  <textarea id="contact-message" class="form-control md-textarea" rows="3" name="message" value="{{ old('message') }}"></textarea>
                  <label for="contact-message">Your message</label>
                </div>
                <div>{{ $errors -> first('message') }}</div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            @csrf

            <button type="submit" class="text-center text-md-center btn blue-gradient">
              Send Message
            </button>

          </form>

        {{-- @endif --}}

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li>
            <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
            <p>Near pote house , Rathi Nagar, Amravati-444601<br> </p>
          </li>
          <li>
            <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
            <p>(+91) 80878 49328, 98347 80188</p>
          </li>
          <li>
            <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
            <p class="mb-0">kartiktiwari65892@gmail.com<br>tiwarikartik39@gmail.com</p>
          </li>
        </ul>
      </div>
      <!-- Grid column -->

    </div>

    <!-- Grid row -->
    </section>
    <hr class="my-5">
    @endsection
