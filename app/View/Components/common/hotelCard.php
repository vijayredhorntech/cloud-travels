<?php

namespace App\View\Components\common;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hotelCard extends Component
{
    public $hotelImage;
    public $hotelName;
    public $hotelDesc;
    public $ratingCount;
    public $ratingStatus;
    public $price;
    public function __construct($hotelName, $hotelDesc, $hotelImage, $ratingCount, $ratingStatus,$price)
    {
        $this->hotelImage = $hotelImage;
        $this->hotelName = $hotelName;
        $this->hotelDesc = $hotelDesc;
        $this->ratingCount = $ratingCount;
        $this->ratingStatus = $ratingStatus;
        $this->price = $price;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.hotel-card');
    }
}
