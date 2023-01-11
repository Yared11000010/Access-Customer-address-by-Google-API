<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){

        return view('order');
    }
    public function storeCurrentLocation(Request $request)
    {
        $request->all();
        // $location = geoip(request()->ip());
        $order = new Order();
        $order->address_1 = request('address_1');
        $order->address_2 = request('address_2');
        $order->city = request('city');
        $order->state = request('state');
        $order->zip = request('zip');
        $order->latitude = request('latitude');
        $order->longitude = request('longitude');
        $order->save();

        redirect()->back();
    }
}
