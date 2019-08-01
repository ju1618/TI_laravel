<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'title', 'product-image', 'price', 'category_id', 'description', 'user_id'
  ];

  public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id');
  }

}
