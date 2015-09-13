@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'Menu Items','showAction' => true,'nameRoute' => 'admin.menuitems.create'])
    @include('admin.menuitems._tables')
@endsection