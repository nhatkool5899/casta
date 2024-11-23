<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'name',
        'slug'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_category';

    public function news()
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }
}
