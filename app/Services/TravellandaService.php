<?php

// app/Services/TravellandaDataDownloadService.php

namespace App\Services;

use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\Http;

class TravellandaService
{
    protected $username;
    protected $password;
    protected $endpoint;
    protected $credentials;

    public function __construct()
    {
        $this->username = config('services.travellanda.username');
        $this->password = config('services.travellanda.password');
        $this->endpoint = config('services.travellanda.endpoint');
        $this->credentials = '<Username>' . $this->username . '</Username>
    <Password>' . $this->password . '</Password>';
    }


    public function buildSearchRequest($searchParams)
    {
        return '<Request>
  <Head>
    ' . $this->credentials . '
    <RequestType>HotelSearch</RequestType>
  </Head>
  <Body>
    <CityIds>
      <CityId>' . $searchParams['city'] . '</CityId>
    </CityIds>
    <CheckInDate>' . $searchParams['checkIn'] . '</CheckInDate>
    <CheckOutDate>' . $searchParams['checkOut'] . '</CheckOutDate>
    <Rooms>
      <Room>
<NumAdults>2</NumAdults>
</Room>
<Room>
<NumAdults>1</NumAdults>
<Children>
<ChildAge>4</ChildAge>
<ChildAge>6</ChildAge>
</Children>
</Room>
    </Rooms>
    <Nationality>GB</Nationality>
    <Currency>GBP</Currency>
    <AvailableOnly>1</AvailableOnly>
  </Body>
</Request>
';
    }

    public function buildPolicyRequest($option)
    {
        return '<Request>
            <Head>
            ' . $this->credentials . '
            <RequestType>HotelPolicies</RequestType>
            </Head>
            <Body>
            <OptionId>' . $option . '</OptionId>
          </Body>
            </Request>';
    }

    public function buildHotelDetailsRequest($hotels)
    {
        $hotelsXML = '';
        foreach ($hotels as $hotel) {
            $hotelsXML .= '<HotelId>' . $hotel . '</HotelId>';
        }
        return '<Request>
            <Head>
            ' . $this->credentials . '
            <RequestType>GetHotelDetails<</RequestType>
            </Head>
            <Body>
            <HotelIds>
            ' . $hotelsXML . '
            </HotelIds>
          </Body>
            </Request>';
    }

    public function buildBookingRequest($option)
    {
        dd($option);
        $optionsXML = '';
        foreach ($options as $option) {
            $optionsXML .= '<OptionId>' . $option . '</OptionId>';
        }
        return '<Request>
            <Head>
            ' . $this->credentials . '
            <RequestType>HotelBooking<</RequestType>
            </Head>
            <Body>
            <Options>
            ' . $optionsXML . '
            </Options>
          </Body>
            </Request>';
    }

    public function XMlToJSON($return)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($return);
        $json = new \FluentDOM\Serializer\Json\RabbitFish($dom);
        return json_decode($json, true);
    }

    public function sendRequest($xmlRequest)
    {
        $ch = curl_init($this->endpoint);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, "xml=" . $xmlRequest);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $return = curl_exec($ch);
        curl_close($ch);
        return $this->XMlToJSON($return);
    }

}
