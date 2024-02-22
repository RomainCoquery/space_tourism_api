<?php

namespace App\Http\Controllers\Api;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function index()
    {
        return response()->json(Destination::all());
    }

    public function store(Request $request)
    {
        $destination = Destination::create($request->all());
        return response()->json($destination, 201);
    }

    public function show($id)
    {
        $destination = Destination::findOrFail($id);
        return response()->json($destination);
    }

    public function update(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);
        $destination->update($request->all());

        return response()->json($destination, 200);
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destinationName = $destination->en_name;
        $destination->delete();
        return response()->json(['message' => "Destination '{$destinationName}' deleted"], 200);
    }
}
