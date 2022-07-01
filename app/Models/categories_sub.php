<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories_sub extends Model
{
    use HasFactory;

    protected $table = 'categories_subs';

    protected $primaryKey = 'id_categories_subs';

    protected $fillable = [
        'categories_subs',
        'slug_subs',
        'id_categories',
    ];
}
