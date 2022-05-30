<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleries_content extends Model
{
    use HasFactory;
    protected $table = 'galleries_contents';

    protected $primaryKey = 'id_galleries_contents';

    protected $fillable = [
        'title',
        'slug',
        'locations',
        'description',
        'venue',
        'date_start',
        'date_end',
    ];
}
