<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
		'name','detail','stock','price','discount','user_id'

	];

    public function reviews()
    {
      return $this->hasMany(Reviews::class);
    }

}
