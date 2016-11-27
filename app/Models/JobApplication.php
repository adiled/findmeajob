<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model {

	protected $table = 'job_applications';
	public $timestamps = true;

  protected $fillable = [
    'listing_id', 'user_id', 'cover_letter'
  ];

}