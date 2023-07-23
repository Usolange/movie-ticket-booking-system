<!-- resources/views/showtimes/index.blade.php -->

@extends('layouts.app') <!-- Assuming you have a base layout file -->

@section('content')
    <h1>Movie Showtimes</h1>

    @if(count($showtimes) > 0)
        <ul>
            @foreach($showtimes as $showtime)
                <li>
                    Movie: {{ $showtime['movie']['title'] }}<br>
                    Start Time: {{ $showtime['start_time'] }}<br>
                    End Time: {{ $showtime['end_time'] }}<br>
                    Available Seats: {{ $showtime['available_seats'] }}<br>
                </li>
            @endforeach
        </ul>
    @else
        <p>No showtimes available for the selected theater.</p>
    @endif
@endsection
