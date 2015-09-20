@extends('admin.app')


           @section('content')
                  @include('admin.partials.title-section',['title' => 'New User','showAction' => false])
                  {!! Form::open(['route' => 'admin.users.store','class' => 'form-horizontal']) !!}
                       @include('admin.users.partials._form')
                  {!! Form::close() !!}
           @endsection