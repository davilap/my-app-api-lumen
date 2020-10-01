<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     *  @OA\Schema(
     *   schema="Category",
     *   type="object",
     *   allOf={ 
     *       @OA\Schema(
     *           required={"description"},
     *           @OA\Property(property="description", type="string")
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
}
