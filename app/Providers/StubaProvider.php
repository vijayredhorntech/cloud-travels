<?php
// app/Providers/StubaProvider.php

namespace App\Providers;

use Illuminate\Support\Facades\Http;

class StubaProvider
{
    public function fetchPrices()
    {
        return Http::get('https://stuba-api.com/prices')->json();
    }
}
