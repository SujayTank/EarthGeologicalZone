@extends('layouts.main')
@section('title','Gallary')
@section('content')

<!-- <hr class="my-5"> -->
<section>
<h3 class="h3 text-center mb-5">Gallary</h3

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row mb-4">
                    <a href="{{ asset('/data/img/gallary/a1.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                            <img src="{{ asset('/data/img/gallary/a1.jpeg') }}" class="img-fluid rounded  hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a2.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                        <img src="{{ asset('/data/img/gallary/a2.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a3.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                        <img src="{{ asset('/data/img/gallary/a3.jpeg') }}" class="img-fluid rounded hoverable" >
                    </a>
                    <a href="{{ asset('/data/img/gallary/a4.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                        <img src="{{ asset('/data/img/gallary/a4.jpeg') }}" class="img-fluid rounded hoverable" >
                    </a>
                </div>
                <div class="row mb-4 ">
                    <a href="{{ asset('/data/img/gallary/a5.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('/data/img/gallary/a5.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a6.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('/data/img/gallary/a6.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a2.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('/data/img/gallary/a2.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                </div>
                <!-- <div class="row mb-4 ">
                    <a href="{{ asset('/data/img/gallary/a5.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-2">
                        <img src="{{ asset('/data/img/gallary/a5.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a6.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-2">
                        <img src="{{ asset('/data/img/gallary/a6.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a2.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-2">
                        <img src="{{ asset('/data/img/gallary/a2.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a2.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-2">
                        <img src="{{ asset('/data/img/gallary/a2.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a2.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-2">
                        <img src="{{ asset('/data/img/gallary/a2.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                    <a href="{{ asset('/data/img/gallary/a2.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-2">
                        <img src="{{ asset('/data/img/gallary/a2.jpeg') }}" class="img-fluid rounded hoverable">
                    </a>
                </div> -->
            </div>
        </div>
</section>
<hr class="my-5">
@endsection