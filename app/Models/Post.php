<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id'); // Match the updated column name
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // Match the updated column name
    }
}
