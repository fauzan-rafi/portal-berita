<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // allow fillable
    protected $fillable = ['title','slug','body','category_id'];

    //membuat function sendiri
    public function scopeLatestFirst()
    {
        return $this->latest()->first();
    }

    // costum function show data by id asc

    public function scopeShowPost()
    {
        return $this->orderBy('id','asc')->get();
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
