@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'Users','showAction' => true,'nameRoute' => 'admin.users.create'])
    @include('admin.users.partials._table')
@endsection