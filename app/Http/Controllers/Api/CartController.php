<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    public function index()
    {
        return CartResource::collection(Cart::all());
    }

    public function store(Request $request)
    {
        $created_cart = Cart::create($request->all());

        return new CartResource($created_cart);
    }

    public function show(string $id)
    {
        return new CartResource(Cart::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
