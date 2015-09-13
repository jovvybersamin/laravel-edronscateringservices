@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'Packages','showAction' => true,'nameRoute' => 'admin.packages.create'])
    @include('admin.packages._tables')
@endsection