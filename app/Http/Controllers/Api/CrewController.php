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
        $crew = new Crew();
        $crew->name = $request->input('name');
        $crew->en_description = $request->input('en_description');
        $crew->fr_description = $request->input('fr_description');
        $crew->en_job = $request->input('en_job');
        $crew->fr_job = $request->input('fr_job');

        // Vérifier si une image a été téléchargée
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Déplacer l'image téléchargée vers le dossier de stockage
            $image->move(storage_path('app/public/img'), $imageName);
            // Mettre à jour le chemin de l'image dans la base de données
            $crew->picture = 'storage/img/' . $imageName;
        }
        $crew->save();
        // Retourner la réponse JSON avec les données du membre d'équipage nouvellement créé
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
        
        // Mettre à jour les champs autres que l'image
        $crew->update($request->except('picture'));

        // Vérifier si une image a été téléchargée
        if ($request->hasFile('picture')) {

            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Déplacer l'image téléchargée vers le dossier de stockage
            $image->move(storage_path('app/public/img'), $imageName);
            // Mettre à jour le chemin de l'image dans la base de données
            $crew->picture = 'storage/img/' . $imageName;
            $crew->save();
        }

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
