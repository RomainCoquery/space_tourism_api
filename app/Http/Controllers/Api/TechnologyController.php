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
        $technology = new Technology();
        $technology->en_name = $request->input('en_name');
        $technology->fr_name = $request->input('fr_name');
        $technology->en_description = $request->input('en_description');
        $technology->fr_description = $request->input('fr_description');

        // Vérifier si une image a été téléchargée
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Déplacer l'image téléchargée vers le dossier de stockage
            $image->move(storage_path('app/public/img'), $imageName);
            // Mettre à jour le chemin de l'image dans la base de données
            $technology->picture = 'storage/img/' . $imageName;
        }
        $technology->save();
        // Retourner la réponse JSON avec les données de la technologie nouvellement créée
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
        
        // Mettre à jour les champs autres que l'image
        $technology->update($request->except('picture'));

        // Vérifier si une image a été téléchargée
        if ($request->hasFile('picture')) {

            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Déplacer l'image téléchargée vers le dossier de stockage
            $image->move(storage_path('app/public/img'), $imageName);
            // Mettre à jour le chemin de l'image dans la base de données
            $technology->picture = 'storage/img/' . $imageName;
            $technology->save();
        }

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
