<?php

namespace App\View\Components\property;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hotelPriceDetails extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.property.hotel-price-details');
    }
}
