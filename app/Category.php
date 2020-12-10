<?php

namespace App;

use App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// protected $fillable = ['code', 'name', 'description', 'image'];
	protected $fillable = ['code', 'name', 'description', 'image', 'name_en', 'description_en'];
    public function products() {
    	return $this->hasMany(Product::class);
    }
}
