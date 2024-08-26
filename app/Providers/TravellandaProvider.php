<?php
// app/Providers/TravellandaProvider.php

namespace App\Providers;

use App\Services\TravellandaService;
use Illuminate\Support\Facades\Http;

class TravellandaProvider
{
    private $travellandaService;

    public function __construct()
    {
        $this->travellandaService = new TravellandaService();
    }

    public function fetchPrices($searchParams)
    {
        $searchParams['checkIn'] = date('Y-m-d', strtotime(explode('to', $searchParams['date'])[0]));
        $searchParams['checkOut'] = date('Y-m-d', strtotime(explode('to', $searchParams['date'])[1]));
        $xmlRequest = $this->travellandaService->buildSearchRequest($searchParams);
        return $this->travellandaService->sendRequest($xmlRequest);
    }
    public function fetchPolicies($options)
    {
        $xmlRequest = $this->travellandaService->buildPolicyRequest($options);
        return $this->travellandaService->sendRequest($xmlRequest);
    }
    public function fetchHotelDetails($options)
    {
        $xmlRequest = $this->travellandaService->buildHotelDetailsRequest($options);
        return $this->travellandaService->sendRequest($xmlRequest);
    }
    public function bookHotel($options)
    {
        $xmlRequest = $this->travellandaService->buildBookingRequest($options);
        return $this->travellandaService->sendRequest($xmlRequest);
    }




}
