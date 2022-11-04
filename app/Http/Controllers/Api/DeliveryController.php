<?php

namespace App\Http\Controllers\Api;

use App\Models\Delivery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function deliveryPriceCalc(Delivery $deliveryAddress)
    {
        $oneKm = 50;

        $result = ($deliveryAddress->delivery_address_range * $oneKm) . 'rub';

        return 120 . 'rub';
    }
}
