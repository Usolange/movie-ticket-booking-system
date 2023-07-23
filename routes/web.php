<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieTicketBookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [MovieTicketBookingController::class, 'welcome']);

Route::get('/movies', [MovieController::class, 'getAllMovies'])->name('movies');
Route::get('/search', [MovieController::class, 'searchMovies'])->name('search_movies');


Route::get('/theaters', [MovieTicketBookingController::class, 'searchTheaters']);
Route::get('/theaters/{theater_id}/movies/{movie_id}/showtimes', [MovieTicketBookingController::class, 'getShowtimes']);
Route::post('/bookings', [MovieTicketBookingController::class, 'makeBooking']);
Route::get('/theaters/search', [MovieTicketBookingController::class, 'searchTheaters']);
Route::get('/showtimes/{showtime_id}/seats', [MovieTicketBookingController::class, 'getAvailableSeats']);
Route::post('/showtimes/{showtime_id}/seats', [MovieTicketBookingController::class, 'bookSeats']);
Route::post('/showtimes/{showtime_id}/confirm-booking', [MovieTicketBookingController::class, 'confirmBooking']);
Route::get('/theaters/{theater_id}/movies', [MovieTicketBookingController::class, 'getMovieShowtimes']);