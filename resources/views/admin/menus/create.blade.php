@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'New Menu','showAction' => false])
    {!! Form::open(['route' => 'admin.menus.store','class' => 'form-horizontal']) !!}
        @include('admin.menus._forms')
    {!! Form::close() !!}
@endsection