@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'Menus','showAction' => true,'nameRoute' => 'admin.menus.create'])
    @include('admin.menus._tables')
@endsection