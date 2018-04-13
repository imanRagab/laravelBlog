<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    const UPDATED_AT = null;

    protected $fillable = [

        'title',
        'description',
        'user_id'
    ];

    public function user(){
        
        return $this->belongsTo(User::class);
    }
}