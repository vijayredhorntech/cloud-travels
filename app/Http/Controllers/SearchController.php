<?php

namespace App\Http\Controllers;

use App\Services\PriceAggregatorService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $priceAggregatorService;

    public function __construct(PriceAggregatorService $priceAggregatorService)
    {
        $this->priceAggregatorService = $priceAggregatorService;
    }

    public function index(Request $request)
    {
        dd($request->all());
        return redirect()->route('hotel.search.results', $request->all());
    }

    public function results(Request $request)
    {
//        dd($request->all());
        $hotels = $this->priceAggregatorService->fetchHotels($request->all());
//        $optionIds = $this->priceAggregatorService->extractOptionIDs($hotels);
        return view('search.results',[
            'hotels' => $hotels,
            'searchParams' => $request->all(),
        ]);
    }
}
