<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     *  @OA\Schema(
     *   schema="Product",
     *   type="object",
     *   allOf={ 
     *       @OA\Schema(
     *           required={"description"},
     *           @OA\Property(property="description", type="string")
     *       ),
     *      @OA\Schema(
     *           required={"category_id"},
     *           @OA\Property(property="category_id", type="integer")
     *       )
     *   }
     * )
     */


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
