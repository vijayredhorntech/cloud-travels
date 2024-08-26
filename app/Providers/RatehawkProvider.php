<?php

// app/Providers/RatehawkProvider.php

namespace App\Providers;

use Illuminate\Support\Facades\Http;

class RatehawkProvider
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.ratehawk.api_key');
    }

    public function fetchPrices($searchParams)
    {
        // Customize the API endpoint and request parameters as needed
        $endpoint = 'https://ratehawk-api.com/hotels/search';

        $response = Http::get($endpoint, [
            'api_key' => $this->apiKey,
            'search_params' => $searchParams,
        ]);

        // Check for a successful response
        if ($response->successful()) {
            return $response->json();
        } else {
            // Handle errors or return an empty result
            return [];
        }
    }
}
