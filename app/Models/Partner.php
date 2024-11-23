<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'name',
        'image',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_partner';
}
