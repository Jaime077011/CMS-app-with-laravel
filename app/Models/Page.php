<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'content', 'template'];
    protected $table = 'pages';
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
     }
}
