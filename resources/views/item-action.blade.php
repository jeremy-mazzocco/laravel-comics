@extends('layout.main-layout');

@section('content')
    <h3>
        {{ $fumetti[0]['title'] }}
    </h3>
    <a href="{{ route('home') }}">Home</a>
@endsection
