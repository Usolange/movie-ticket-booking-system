<!-- resources/views/booking/confirmation.blade.php -->

@extends('layouts.app') <!-- Assuming you have a base layout file -->

@section('content')
    <h1>Booking Confirmation</h1>

    @if(isset($confirmation['booking_id']))
        <p>Booking successful! Your booking ID is: {{ $confirmation['booking_id'] }}</p>
        <!-- Display other booking details as needed -->
    @else
        <p>Booking failed. Please try again later.</p>
    @endif
@endsection
