<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'posted_by',
        'status',
        'title',
        'body',
        'cover_image',
        'slug',
        'likes',
        'views',
        'blog_category_id'
    ];

    public function author(){
        return $this->belongsTo(User::class, 'posted_by', 'id');
    }
    public function category(){
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }
}
