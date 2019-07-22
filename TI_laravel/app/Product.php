<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'name', 'price', 'product_img', 'category', 'user_id' 
  ];

  public function users()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

}
