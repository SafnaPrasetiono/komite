<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $primaryKey = 'id_events';

    protected $fillable = [
        'title',
        'slug',
        'schedule',
        'date_start',
        'date_end',
        'description',
        'content',
        'images',
    ];
}
