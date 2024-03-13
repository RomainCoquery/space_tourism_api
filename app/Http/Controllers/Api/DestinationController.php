<?php

namespace App\Http\Controllers\Api;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function index()
    {
        return response()->json(Destination::all());
    }

    public function store(Request $request)
    {
        $destination = new Destination();
        $destination->en_name = $request->input('en_name');
        $destination->fr_name = $request->input('fr_name');
        $destination->en_description = $request->input('en_description');
        $destination->fr_description = $request->input('fr_description');
        $destination->distance = $request->input('distance');
        $destination->distance_unit = $request->input('distance_unit');
        $destination->duration = $request->input('duration');
        $destination->en_duration_unit = $request->input('en_duration_unit');
        $destination->fr_duration_unit = $request->input('fr_duration_unit');

        // Vérifier si une image a été téléchargée
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Déplacer l'image téléchargée vers le dossier de stockage
            $image->move(storage_path('app/public/img'), $imageName);
            // Mettre à jour le chemin de l'image dans la base de données
            $destination->picture = 'storage/img/' . $imageName;
        }
        $destination->save();
        // Retourner la réponse JSON avec les données de la planète nouvellement créée
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

        // Mettre à jour les champs autres que l'image
        $destination->update($request->except('picture'));

        // Vérifier si une image a été téléchargée
        if ($request->hasFile('picture')) {

            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Déplacer l'image téléchargée vers le dossier de stockage
            $image->move(storage_path('app/public/img'), $imageName);
            // Mettre à jour le chemin de l'image dans la base de données
            $destination->picture = 'storage/img/' . $imageName;
            $destination->save();
        }

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
