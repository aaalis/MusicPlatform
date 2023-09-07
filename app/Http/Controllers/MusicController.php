<?php

namespace App\Http\Controllers;

use App\Models\Track;
use http\Env\Request;

class MusicController extends Controller
{
    /**
     * @OA\Put(
     *     path="/users/{id}",
     *     summary="Updates a user",
     *     @OA\Parameter(
     *         description="Parameter with mutliple examples",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string"),
     *         @OA\Examples(example="int", value="1", summary="An int value."),
     *         @OA\Examples(example="uuid", value="0006faf6-7a61-426c-9034-579f2cfcfa83", summary="An UUID value."),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
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
            'author' => 'required|string',
            'name' => 'required|string'
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
            'author' => 'required|string',
            'name' => 'required|string'
        ]);

        $track->update($validatedData);

        return response()->json($track, 200);
    }

    public function deleteTrack(Track $track)
    {
        $track->delete();

        return response()->json(null,204);
    }
}
