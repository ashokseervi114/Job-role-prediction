<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];
    
    public function profile()
		{
			return $this->belongsTo(User::class, 'user_id');
		}

	
}
