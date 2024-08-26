<?php
// app/Services/PriceAggregatorService.php

namespace App\Services;

use App\Providers\StubaProvider;
use App\Providers\TravellandaProvider;
use App\Providers\RatehawkProvider;

class PriceAggregatorService
{
    protected $stubaProvider;
    protected $travellandaProvider;
    protected $ratehawkProvider;

    public function __construct(
        StubaProvider       $stubaProvider,
        TravellandaProvider $travellandaProvider,
        RatehawkProvider    $ratehawkProvider
    )
    {
        $this->stubaProvider = $stubaProvider;
        $this->travellandaProvider = $travellandaProvider;
        $this->ratehawkProvider = $ratehawkProvider;
    }

    public function fetchHotels($searchParams)
    {
//        $stubaPrices = $this->stubaProvider->fetchPrices();
        $travellandaHotels = $this->travellandaProvider->fetchPrices($searchParams);

//        if((int)$travellandaPrices['Response']['Body']['HotelsReturned'] >= 1){
//            dd($travellandaPrices['Response']['Body']['Hotels']);
//        }else{
//            dd('No hotels found');
//        }
//        $ratehawkPrices = $this->ratehawkProvider->fetchPrices();

//        $cheapestOption = ... // Implement your comparison logic here

        return $travellandaHotels;
    }

    public function fetchPolicies($option)
    {
        $travellandaPolicies = $this->travellandaProvider->fetchPolicies($option);
        return $travellandaPolicies;
    }

    public function bookHotel($option)
    {
        $travellandaBooking = $this->travellandaProvider->bookHotel($option);
        return $travellandaBooking;
    }

    function extractOptionIDs($data)
    {
        $optionIDs = [];

        foreach ($data as $key => $value) {
            if ($key === "OptionId") {
                $optionIDs[] = $value;
            } elseif (is_array($value)) {
                $optionIDs = array_merge($optionIDs, $this->extractOptionIDs($value));
            }
        }

        return $optionIDs;
    }
}
