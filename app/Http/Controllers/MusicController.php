<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function getTracks()
    {
        $tracks = Track::all()->load('author', 'genre');

//        $authors = [];
//        foreach ($tracks as $track)
//        {
//            array_push($authors, $track->author);
//        }

        return response()->json($tracks);
    }

    public function createTrack(Request $request)
    {
        $validatedData = $request->validate([
            'trackName' => 'required|',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id'
        ]);

        $track = Track::create($validatedData);

        return response()->json($track, 201);
    }

    public function getTrack(Track $track)
    {
        return response()->json($track);
    }

    public function updateTrack(Request $request, Track $track)
    {
        $validatedData = $request->validate([
            'trackName' => 'required|',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id'
        ]);

        $track->update($validatedData);

        return response()->json($track, 200);
    }

    public function deleteTrack(Track $track)
    {
        $track->delete();

        return response()->json(['message' => 'done'],204);
    }
}
