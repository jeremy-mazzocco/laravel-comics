@extends('layout.main-layout')

@section('content')
    <p>
        DC Comics Home
    </p>
    <div>
        @foreach ($fumetti as $f)
            <h4>
                {{ $f['series'] }}
            </h4>
            <img src="{{ Vite::asset('resources/img/') . $f['thumb'] }}" alt="none">
        @endforeach
    </div>

    <a href="{{ route('action') }}">First item</a>
@endsection
