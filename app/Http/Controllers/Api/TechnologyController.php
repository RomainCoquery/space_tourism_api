<?php

namespace App\Http\Controllers\Api;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnologyController extends Controller
{
    public function index()
    {
        return response()->json(Technology::all());
    }

    public function store(Request $request)
    {
        $technology = Technology::create($request->all());
        return response()->json($technology, 201);
    }

    public function show($id)
    {
        $technology = Technology::findOrFail($id);
        return response()->json($technology);
    }

    public function update(Request $request, $id)
    {
        $technology = Technology::findOrFail($id);
        $technology->update($request->all());

        return response()->json($technology, 200);
    }

    public function destroy($id)
    {
        $technology = Technology::findOrFail($id);
        $technologyName = $technology->en_name;
        $technology->delete();
        return response()->json(['message' => "Technology '{$technologyName}' deleted"], 200);
    }
}
