<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'text_1',
        'image_1',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_home_page';
}
