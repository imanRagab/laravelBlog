<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model{

    use Sluggable;

    const UPDATED_AT = null;

    protected $fillable = [

        'title',
        'description',
        'user_id'
    ];

    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getCreatedAtDateAttribute($value)
    {
        return  \Carbon\Carbon::parse($value)->toDateString();
    }

    public function getCreatedAtTimeAttribute($value)
    {
        return  \Carbon\Carbon::parse($value)->format('l jS \\of F Y h:i:s A');
    }
}