@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'New Event','showAction' => false])

    {!! Form::open(['route' => 'admin.events.store','class' => 'form-horizontal']) !!}
        @include('admin.events.partials._form')
    {!! Form::close() !!}

@endsection