<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderItemResource;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OrderItemResource::collection(OrderItem::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created_orderItem = OrderItem::create($request->all());

        return new OrderItemResource($created_orderItem);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new OrderItemResource(OrderItem::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
