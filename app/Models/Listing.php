<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model {

	protected $table = 'listings';
	public $timestamps = true;

  protected $fillable = [
    'user_id', 'job_title', 'description', 'salary', 'work_hour_start', 'work_hour_end'
  ];

  public function user() {
    return $this->belongsTo('App\Models\User');
  }


}