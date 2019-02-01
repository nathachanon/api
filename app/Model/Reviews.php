<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{

	protected $fillable = [
		'customer','star','review'

	];

  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}
