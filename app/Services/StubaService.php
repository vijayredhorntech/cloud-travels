<?php
// app/Services/StubaService.php

namespace App\Services;

use GuzzleHttp\Client;

class StubaService
{
    protected $apiKey;
    protected $apiSecret;
    protected $baseUrl = 'https://api.stuba.com';

    public function __construct($apiKey, $apiSecret)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    public function searchHotels($params)
    {
        $client = new Client();

        $response = $client->get($this->baseUrl . '/search', [
            'query' => $params,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    // Add more methods as needed for different API endpoints
}
