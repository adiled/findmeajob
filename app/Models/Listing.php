<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model {

	protected $table = 'listings';
	public $timestamps = true;

  protected $fillable = [
    'job_title', 'description'
  ];

  public function user() {
    return $this->belongsTo('App\Models\User');
  }


}