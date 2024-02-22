<?php

namespace App\Http\Controllers\Api;

use App\Models\Crew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrewController extends Controller
{
    public function index()
    {
        return response()->json(Crew::all());
    }

    public function store(Request $request)
    {
        $crew = Crew::create($request->all());
        return response()->json($crew, 201);
    }

    public function show($id)
    {
        $crew = Crew::findOrFail($id);
        return response()->json($crew);
    }

    public function update(Request $request, $id)
    {
        $crew = Crew::findOrFail($id);
        $crew->update($request->all());

        return response()->json($crew, 200);
    }

    public function destroy($id)
    {
        $crew = Crew::findOrFail($id);
        $crewName = $crew->name;
        $crew->delete();
        return response()->json(['message' => "Crew '{$crewName}' deleted"], 200);
    }
}
