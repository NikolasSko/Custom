<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Http\Resources\CartItemResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartItemController extends Controller
{
    public function index()
    {
        return CartItemResource::collection(CartItem::all());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return new CartItemResource(CartItem::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(CartItem $cartItem)
    {
        $cartItem->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
