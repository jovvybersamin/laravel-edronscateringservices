@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => $menuitem->name,'showAction' => false])
    {!! Form::model($menuitem,['method' => 'PUT','route' => array('admin.menuitems.update',$menuitem->id),'class' => 'form-horizontal']) !!}
        @include('admin.menuitems._forms')
    {!! Form::close() !!}
@endsection