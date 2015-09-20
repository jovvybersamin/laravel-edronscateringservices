@extends('frontend.app')

@section('content')

<div class="row">
        @include('frontend.packages.partials.packages',$packages)
    </div>

@endsection
