@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'Edit ' . $event->name,'showAction' => false])

    {!! Form::model($event,['method' => 'PUT','route' => array('admin.events.update',$event->id),'class' => 'form-horizontal']) !!}
        @include('admin.events.partials._form')
    {!! Form::close() !!}

@endsection