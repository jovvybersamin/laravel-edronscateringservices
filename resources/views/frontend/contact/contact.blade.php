@extends('frontend.app')

@section('content')

<div class="row">
        @include('frontend.contact.partials.contact-box')
    </div>

<div class="row">
        @include('frontend.contact.partials.contact-form')
    </div>

@endsection
