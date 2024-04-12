<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlowRequest;
use App\Http\Requests\UpdateFlowRequest;
use App\Models\Flow;

class FlowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Flow::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlowRequest $request)
    {
        return Flow::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Flow $flow)
    {
        return $flow;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlowRequest $request, Flow $flow)
    {
        $flow->update($request->validated());
        return $flow;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flow $flow)
    {
        $flow->delete();
        return response()->noContent();
    }
}
