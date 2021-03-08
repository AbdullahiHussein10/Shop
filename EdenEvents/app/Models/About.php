<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory',
        'detail',
        'title',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
