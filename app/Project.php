<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Project extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'ar_title', 'site' , 'video'
        , 'description' , 'img'
      
    ];
    protected $dates = ['deleted_at'];
}
