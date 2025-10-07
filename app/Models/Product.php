<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

class Product extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'name',
        'description',
        'summary',
        'cover',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
