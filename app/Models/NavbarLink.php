<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavbarLink extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'link'];

    public function dropdowns()
    {
        return $this->belongsTo(Dropdown::class);
    }

}
