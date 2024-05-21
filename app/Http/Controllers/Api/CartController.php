<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CartResource::collection(Cart::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created_cart = Cart::create($request->all());

        return new CartResource($created_cart);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new CartResource(Cart::findOrFail($id));
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
    public function destroy(Cart $cart)
    {
        $cart->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
