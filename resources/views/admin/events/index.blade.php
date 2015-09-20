@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => 'Events','showAction' => true,'nameRoute' => 'admin.events.create'])
    @include('admin.events.partials._table')
@endsection