<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        // Vérifiez si un fichier a été téléchargé
        if ($request->hasFile('upload')) {
            // Récupérez l'utilisateur connecté
            $user = Auth::user();

            // Récupérez le fichier téléchargé
            $image = $request->file('upload');

            // Générez un nom de fichier unique pour éviter les conflits
            $imageName = time() . '_' . $user->id . '.' . $image->getClientOriginalExtension();

            // Stockez l'image dans le dossier de stockage public (qui est lié au dossier storage/app/public)
            $image->storeAs('public', $imageName);

            // Mettez à jour la colonne 'upload' de l'utilisateur dans la base de données avec le chemin de l'image
            $user->update(['upload' => 'storage/' . $imageName]);

            return redirect()->back()->with('success', 'Image uploaded successfully');
        } else {
            return redirect()->back()->with('error', 'No image uploaded');
        }
    }
}
