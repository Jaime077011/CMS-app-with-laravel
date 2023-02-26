<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'image', 'category_id', 'is_publish'];
    protected $table = 'posts';
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
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
