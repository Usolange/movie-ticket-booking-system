<!-- resources/views/theaters/index.blade.php -->

@extends('layouts.app') <!-- Assuming you have a base layout file -->

@section('content')
    <h1>Theaters</h1>

    @if(count($theaters) > 0)
        <ul>
            @foreach($theaters as $theater)
                <li>
                    {{ $theater['name'] }} - {{ $theater['address'] }}, {{ $theater['city'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No theaters found for the specified city.</p>
    @endif
@endsection
