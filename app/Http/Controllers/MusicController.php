<?php

namespace App\Http\Controllers;

use App\Models\Track;
use http\Env\Request;

class MusicController extends Controller
{
    public function index()
    {
        $tracks = Track::all();
        return response()->json($tracks);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author' => 'required|string',
            'name' => 'required|string'
        ]);

        $track = Track::create($validatedData);

        return response()->json($track, 201);
    }

    public function show(Track $track)
    {
        return response()->json($track);
    }

    public function update(Request $request, Track $track)
    {
        $validatedData = $request->validate([
            'author' => 'required|string',
            'name' => 'required|string'
        ]);

        $track->update($validatedData);

        return response()->json($track, 200);
    }

    public function destroy(Track $track)
    {
        $track->delete();

        return response()->json(null,204);
    }
}
