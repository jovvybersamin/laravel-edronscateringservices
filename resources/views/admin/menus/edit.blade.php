@extends('admin.app')


@section('content')
    @include('admin.partials.title-section',['title' => $menu->name,'showAction' => false])

    {!! Form::model($menu,['method' => 'PUT','route' => array('admin.menus.update',$menu->id),'class' => 'form-horizontal']) !!}
        {!! Form::hidden('id',$menu->id) !!}
        @include('admin.menus._forms')
    {!! Form::close() !!}
@endsection