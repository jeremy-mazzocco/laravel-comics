@extends('layout.main-layout');

@section('content')
    <p>
        Here is the first item
    </p>
    <a href="{{ route('home') }}">Home</a>
@endsection
