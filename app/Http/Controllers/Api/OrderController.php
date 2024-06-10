<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResource::collection(Order::all());
    }

    public function store(Request $request)
    {
        $created_order = Order::create($request->all());

        return new OrderResource($created_order);
    }

    public function show(string $id)
    {
        return new OrderResource(Order::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
