<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShortendUrl extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'url', 'slug',
    ];
}
