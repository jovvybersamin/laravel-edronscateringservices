@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'New Package','showAction' => false])

    {!! Form::open(['route' => 'admin.packages.store','class' => 'form-horizontal']) !!}
        @include('admin.packages._forms')
    {!! Form::close() !!}
@endsection