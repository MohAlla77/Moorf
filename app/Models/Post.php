<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class Post extends Model
{
    use SoftDeletes;
    use HasFactory;


    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
        'body',
        'published_at',
        'featured',
    ];
    protected $casts = [
        'published_at' => 'datetime',
];

public function author(){

return $this->belongsTo(User::class, 'user_id');


}

public function comments()
{
    return $this->hasMany(Comment::class);
}




    public function scopePublished($query){
        $query->where("published_at", '<=', Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where("featured", true);
    }

    public function getExcerpt(){
        return Str::limit(strip_tags($this->body),150);
    }
    public function getReadingTime(){
        $mins =  round(str_word_count($this->body) / 250);
        return ($mins < 1 ) ? 1 : $mins;
    }
}