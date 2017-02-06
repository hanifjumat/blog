<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable=['name'];

	
    public function category()
    {
    	$this->belongsTo(Category::class);
    }
}
