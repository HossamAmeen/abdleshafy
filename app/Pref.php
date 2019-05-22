<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pref extends Model
{
   
    protected $fillable = [
        'name', 'description',
        'email' , 'facebook' , 'twitter' , 'instagram' ,'youtube'
    ];
    protected $dates = ['deleted_at'];
}
