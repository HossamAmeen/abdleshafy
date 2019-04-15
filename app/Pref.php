<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pref extends Model
{
   
    protected $fillable = [
        'arAddress', 'arDescription' , 'phone'
        , 'arMainAddress' ,
        'mainEmail' , 'facebook' , 'twitter' , 'instgram' ,'linkedin'
    ];
    protected $dates = ['deleted_at'];
}
