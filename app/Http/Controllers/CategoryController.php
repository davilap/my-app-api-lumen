<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @OA\Get(
     *     path="/categories",
     *     summary="get all  categories",
     *     tags={"categories"},
     *     description="Get all categories",
     *     operationId="getallcategories",
     *     security={
     *       {"api_key": {}}
     *     },
     *   @OA\Response(
     *       response=200,
     *       description="successful operation",
     *   ),
     *   @OA\Response(
     *       response="400",
     *       description="Invalid data",
     *   ),
     *   deprecated=false
     * )
     */

    public function index()
    {
        $response = Category::all();
        return response()->json($response);
    }

}
