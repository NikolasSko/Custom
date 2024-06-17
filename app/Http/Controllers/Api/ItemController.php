<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemStoreRequest;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    public function index()
    {
        return ItemResource::collection(Item::all());
    }

    public function store(ItemStoreRequest $request)
    {
        $created_item = Item::create($request->validated());

        return new ItemResource($created_item);
    }

    public function show(string $id)
    {
        return new ItemResource(Item::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Item $item)
    {

        $item->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

     public function search($name)
    {
        return Item::where("name", "like", "%".$name. "%")->get();
    }
}
