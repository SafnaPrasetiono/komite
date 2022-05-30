<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    use HasFactory;
    protected $table = 'banners';

    protected $primaryKey = 'id_banners';

    protected $fillable = [
        'banners_name',
        'size',
        'extension',
        'location',
    ];
}
