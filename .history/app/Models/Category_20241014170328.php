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
        'slug',
        'icon'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_category';

    public function service()
    {
        return $this->hasMany(Service::class, 'category_id', 'id');
    }
}
