<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesignResource;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DesignController extends Controller
{
    public function index()
    {
        return DesignResource::collection(Design::all());
    }

    public function store(Request $request)
    {
        $created_design = Design::create($request->all());

        return new DesignResource($created_design);
    }

    public function show(string $id)
    {
        return new DesignResource(Design::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Design $design)
    {
        $design->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
