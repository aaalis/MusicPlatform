<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/tracks",
 *     summary="Создание трека",
 *     tags={"Endpoints"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="trackName", type="string", example="some track"),
 *                     @OA\Property(property="author_id", type="integer", example=1),
 *                     @OA\Property(property="genre_id", type="integer", example=1),
 *                 )
 *             }
 *         ),
 *     ),
 *
 *     @OA\Response(
 *         response=201,
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="trackName", type="string", example="some track"),
 *             @OA\Property(property="author_id", type="integer", example=1),
 *             @OA\Property(property="genre_id", type="integer", example=1)
 *         )
 *     ),
 * ),
 *
 * @OA\Get (
 *      path="/api/tracks",
 *      summary="Получение всех треков со связанными данными",
 *      tags={"Endpoints"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items()),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Get (
 *       path="/api/tracks/{track}",
 *       summary="Получение трека",
 *       tags={"Endpoints"},
 *       @OA\Parameter(
 *           description="ID трека",
 *           in="path",
 *           name="track",
 *           required=true,
 *           example=1
 *       ),
 *
 *       @OA\Response(
 *           response=200,
 *           description="Ok",
 *           @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="trackName", type="string", example="some track"),
 *              @OA\Property(property="author_id", type="integer", example=1),
 *              @OA\Property(property="genre_id", type="integer", example=1)
 *          )
 *       ),
 *   ),
 *
 * @OA\Put (
 *        path="/api/tracks/{track}",
 *        summary="Обновление трека",
 *        tags={"Endpoints"},
 *        @OA\Parameter(
 *            description="ID трека",
 *            in="path",
 *            name="track",
 *            required=true,
 *            example=1
 *        ),
 *
 *        @OA\RequestBody(
 *            @OA\JsonContent(
 *                allOf={
 *                     @OA\Schema(
 *                         @OA\Property(property="trackName", type="string", example="some track"),
 *                         @OA\Property(property="author_id", type="integer", example=1),
 *                         @OA\Property(property="genre_id", type="integer", example=1),
 *                     )
 *                 }
 *            ),
 *        ),
 *
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *            @OA\JsonContent(
 *               @OA\Property(property="id", type="integer", example=1),
 *               @OA\Property(property="trackName", type="string", example="some track"),
 *               @OA\Property(property="author_id", type="integer", example=1),
 *               @OA\Property(property="genre_id", type="integer", example=1)
 *           )
 *        ),
 *    ),
 *
 * @OA\Delete (
 *        path="/api/tracks/{track}",
 *        summary="Удаление трека",
 *        tags={"Endpoints"},
 *        @OA\Parameter(
 *            description="ID трека",
 *            in="path",
 *            name="track",
 *            required=true,
 *            example=1
 *        ),
 *
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *            @OA\JsonContent(
 *               @OA\Property(property="message", type="string", example="done"),
 *           )
 *        ),
 *    ),
 */
class MusicController extends Controller
{

}
