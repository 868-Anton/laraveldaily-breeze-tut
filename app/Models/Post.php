<?php

namespace App\Models;
namespace App\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Eloquent Relation ???
    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
