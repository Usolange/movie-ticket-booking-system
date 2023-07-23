<!-- resources/views/seats/select.blade.php -->

@extends('layouts.app') <!-- Assuming you have a base layout file -->

@section('content')
    <h1>Seat Selection</h1>

    @if(count($seatingPlan['seats']) > 0)
        <form action="/showtimes/{{ $seatingPlan['showtime_id'] }}/seats" method="post">
            @csrf
            <h3>Select your seats:</h3>
            <ul>
                @foreach($seatingPlan['seats'] as $seat)
                    <li>
                        Seat: {{ $seat['seat_number'] }} (Row: {{ $seat['row_number'] }})
                        <input type="checkbox" name="seats[]" value="{{ $seat['seat_number'] }}">
                    </li>
                @endforeach
            </ul>
            <button type="submit">Book Selected Seats</button>
        </form>
    @else
        <p>No available seats for the selected showtime.</p>
    @endif
@endsection
