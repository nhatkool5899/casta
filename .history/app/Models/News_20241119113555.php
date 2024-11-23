<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'content',
        'image',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_news';

    public function category(){
        return $this->belongsTo(Category::class, 'category_id')
    }
}
