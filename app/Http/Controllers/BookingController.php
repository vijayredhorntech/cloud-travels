<?php

namespace App\Http\Controllers;

use App\Services\PriceAggregatorService;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $priceAggregatorService;

    public function __construct(PriceAggregatorService $priceAggregatorService)
    {
        $this->priceAggregatorService = $priceAggregatorService;
    }

    public function index(Request $request)
    {
        return view('hotel.booking',[
            'option' => $request['option'],
            'searchParams' => $request->all(),
            ]);
    }

    public function process(Request $request)
    {
//        dd($request);
        $booking = $this->priceAggregatorService->bookHotel($request->all());
        return view('hotel.booking',[
            'option' => $request['option'],
            'searchParams' => $request->all(),
            'booking' => $booking,
        ]);
    }
}
