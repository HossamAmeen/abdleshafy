<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'ar_title', 'owner' , 'date'
        , 'description' ,
        'img'
    ];
    protected $dates = ['deleted_at'];
}
