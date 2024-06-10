<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderItemResource;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderItemController extends Controller
{
    public function index()
    {
        return OrderItemResource::collection(OrderItem::all());
    }

    public function store(Request $request)
    {
        $created_orderItem = OrderItem::create($request->all());

        return new OrderItemResource($created_orderItem);
    }

    public function show(string $id)
    {
        return new OrderItemResource(OrderItem::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
