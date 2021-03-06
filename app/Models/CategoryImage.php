<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class CategoryImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'image_url',
        'image_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'image_id' => 'integer',
    ];
    /**
     * @var mixed|string
     */
    private $image_url;
    /**
     * @var array|mixed|string|null
     */


    public function images($category)
    {
        return $this->all()->where('category_id',$category);
    }
    public function upImage($url,$id)
    {
        DB::insert("INSERT INTO `category_images`(`image_url`,`category_id`) VALUES ('".$url."','".$id."')");
    }
}
