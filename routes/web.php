<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {


    //    old admin screen apart from bookings
            Route::get('/', fn () => view('home'))->name('home');
            Route::get('/flightSearch', fn () => view('flightSearch'))->name('flightSearch');
            Route::get('/flightDetails', fn () => view('flightDetails'))->name('flightDetails');
            Route::get('/passengerDetails', fn () => view('passengerDetails'))->name('passengerDetails');
            Route::get('/payment', fn () => view('payment'))->name('payment');

            Route::get('/flexiFlight', fn () => view('flexiFlight'))->name('flexiFlight');
    //    old admin screen apart from bookings

    //    New admin screen for bookings

            Route::get('/bookingHome', fn () => view('booking.home'))->name('bookingHome');
            Route::get('/holidayList', fn () => view('booking.holidayList'))->name('holidayList');
            Route::get('/property', fn () => view('booking.property'))->name('property');
            Route::get('/bookingStage1', fn () => view('booking.bookingStage1'))->name('bookingStage1');
            Route::get('/bookingStage2', fn () => view('booking.bookingStage2'))->name('bookingStage2');
            Route::get('/bookingStage3', fn () => view('booking.bookingStage3'))->name('bookingStage3');
            Route::get('/bookingStage4', fn () => view('booking.bookingStage4'))->name('bookingStage4');
            Route::get('/bookingStage5', fn () => view('booking.bookingStage5'))->name('bookingStage5');

    //    New admin screen for bookings

    Route::get('/download',function (){
        $travellandaDataDownloadService = new \App\Services\TravellandaDataDownloadService();
        $travellandaDataDownloadService->downloadCountries();
        $travellandaDataDownloadService->downloadCities();
        return 'done';
    });


    Route::group(['prefix' => 'hotel'], function () {
        Route::get('/search', [\App\Http\Controllers\SearchController::class,'index'])->name('hotel.search');
        Route::get('/search-results', [\App\Http\Controllers\SearchController::class,'results'])->name('hotel.search.results');
        Route::get('/hotel-details', [\App\Http\Controllers\SearchController::class,'details'])->name('hotel.details');

        Route::post('/booking', [\App\Http\Controllers\BookingController::class,'index'])->name('hotel.booking');
    });


    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
