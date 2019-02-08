<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
		'name','detail','stock','price','discount','user_id'

	];

    public function review()
    {
      return $this->hasMany(Reviews::class);
    }

}
