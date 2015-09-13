@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'New Menu','showAction' => false])
    {!! Form::open(['route' => 'admin.menuitems.store','class' => 'form-horizontal']) !!}
        @include('admin.menuitems._forms')
    {!! Form::close() !!}
@endsection