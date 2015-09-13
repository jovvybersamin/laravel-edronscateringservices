@extends('frontend.app')

@section('content')

    <div class="row">
        @include('frontend.home.partials.carousel-box')
    </div>

    <div class="row">
        @include('frontend.home.partials.about-box')
    </div>


    <div class="row">
        @include('frontend.home.partials.packages-box')
    </div>


@endsection