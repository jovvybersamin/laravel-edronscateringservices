@extends('admin.app')


@section('content')
       @include('admin.partials.title-section',['title' => 'Edit ' . $user->name, 'showAction' => false])
       {!! Form::model($user,['method' => 'PUT','route' => array('admin.users.update',$user->id),'class' => 'form-horizontal']) !!}
            @include('admin.users.partials._form')
       {!! Form::close() !!}
@endsection