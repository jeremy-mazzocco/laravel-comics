@extends('layout.main-layout')

@section('content')
    <div class="row">
        @for ($i = 0; $i < count($fumetti); $i++)
            <div class="card">
                <h4>
                    {{ $fumetti[$i]['series'] }}
                </h4>
                <div class="img">
                    <img src="{{ Vite::asset('resources/img/') . $fumetti[$i]['thumb'] }}" alt="none">
                </div>
                <a href="{{ route('action') }}">{{ $i }} item</a>
            </div>
        @endfor
    </div>
@endsection
