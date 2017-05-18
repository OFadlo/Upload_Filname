<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminsImage extends Model
{
    //
    protected $fillable = ['admin_id', 'filename'];
    public function admin()
 {
 	return $this->belongsTo('App\Admin');
 }   
}
