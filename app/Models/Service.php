<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'content',
        'image',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_service';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
