<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'name', 'price', 'image', 'user_id', 'category'
  ];

  public function users()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
  
}
