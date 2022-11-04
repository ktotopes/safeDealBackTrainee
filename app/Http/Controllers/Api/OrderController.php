<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json([
            'orderList' => OrderResource::collection(Order::all()),
        ]);
    }

    public function show(Order $order)
    {
        return response()->json([
            'order' => new OrderResource($order),
        ]);
    }

    public function store(OrderRequest $request)
    {
        $order = new Order($request->validated());
        $order->save();

        return response()->json([
            'id' => $order->id,
        ]);
    }
}
