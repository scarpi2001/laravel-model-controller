@extends('layouts.main-layout')

@section('content')
    <h1>Movies</h1>
    <div>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie -> title }}</li>
            @endforeach
        </ul>
    </div>
@endsection
