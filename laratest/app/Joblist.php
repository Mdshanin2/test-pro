<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joblist extends Model
{
    protected $table = 'job_list';
	protected $primaryKey = "id";
	public $timestamps = false;

	//const CREATED_AT = "create_time";
	//const UPDATED_AT = "update_time";
    //
}
