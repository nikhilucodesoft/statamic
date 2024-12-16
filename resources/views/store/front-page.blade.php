@extends('store.layout.index')

@section('title', $data['main_heading'])

@section('content')
    <h1 class="text-2xl font-bold my-6">{{ $data['title'] }}</h1>
    {!! $data['content'] !!}
@endsection
