<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesignResource;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DesignResource::collection(Design::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created_design = Design::create($request->all());

        return new DesignResource($created_design);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new DesignResource(Design::findOrFail($id));
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
    public function destroy(Design $design)
    {
        $design->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
