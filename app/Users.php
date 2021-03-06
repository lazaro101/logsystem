<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false; 

    public function ojtprofile(){
    	return $this->belongsTo('App\OjtProfile','ojt_profile_id');
    }
}
