<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function index()
    {
        $reponse = Reponse::all();

        return response()->json([
            'success' => true,
            'reponses' => $reponse
        ]);
    }

    public function store(Request $request)
    {
        $reponse = Reponse::create($request->all());

        return response()->json([
            'success' => true,
            'reponses' => $reponse
        ]);
    }

    public function show(Reponse $reponse)
    {
        return response()->json([
            'success' => true,
            'reponse' => $reponse
        ]);
    }

    public function update(Request $request, Reponse $reponse)
    {
        $reponse->update($request->all());

        return response()->json([
            'success' => true,
            'reponse' => $reponse,
        ]);
    }

    public function destroy(Reponse $reponse)
    {
        $reponse->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
