<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     path="/products",
     *     summary="get all products",
     *     tags={"product"},
     *     description="Get all products",
     *     operationId="getallproduct",
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
        $response = Product::with('category')->get();
        return response()->json($response);
    }

    /**
     * @OA\Get(
     *     path="/stores",
     *     summary="get all stores",
     *     tags={"store"},
     *     description="Get all stores",
     *     operationId="getallstore",
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

    public function find()
    {
        $response = Product::with('category')
            ->groupBy('category_id')
            ->select(
                'category_id',
                DB::raw('count(*) as total')
            )
            ->get();;
        return response()->json($response);
    }

    /**
     * @OA\Post(
     *     path="/product",
     *     summary="create product",
     *     tags={"product"},
     *     description="Create product",
     *     operationId="createproduct",
     *   @OA\RequestBody(
     *       required=true,
     *       description="Create product",
     *       @OA\JsonContent(ref="#/components/schemas/Product")
     *   ),
     *   @OA\Response(
     *       response=200,
     *       description="successful operation",
     *   ),
     *   @OA\Response(
     *       response="400",
     *       description="success register",
     *   ),
     *   deprecated=false
     * )
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'category_id' => 'required'
        ]);

        $product = new Product;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        $product->save();
        
        $response = Product::with('category')->find($product->id);

        return response()->json($response);
    }

    /**
     * @OA\Delete(
     *     path="/product",
     *     summary="delete product",
     *     tags={"product"},
     *     description="delete product",
     *     operationId="deleteproduct",
     *   @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id",
     *         required=true,
     *         @OA\Schema(type="integer")
     *   ),
     *   @OA\Response(
     *       response=200,
     *       description="successful operation",
     *   ),
     *   @OA\Response(
     *       response="400",
     *       description="success register",
     *   ),
     *   deprecated=false
     * )
     */
    public function delete($id)
    {
        $product = new Product;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        $product->save();
        
        $response = Product::with('category')->find($product->id);

        return response()->json($response);
    }
}
