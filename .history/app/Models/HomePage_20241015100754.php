<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'title_1',
        'text_1',
        'title_2',
        'text_2',
        'title_3',
        'text_3',
        'title_4',
        'text_4',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_home_page';
}
