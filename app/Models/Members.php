<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $primaryKey = 'id_members';

    protected $fillable = [
        'code',
        'nik',
        'username',
        'email',
        'born',
        'gender',
        'phone',
        
        'country',
        'province',
        'city',
        'district',
        'village',
        'postal_code',
        'address',
        'id_province',
        'id_regency',
        'id_district',
        'id_village',

        'typeBusiness',
        'class',
        'description',
        'permission',
        
        'validate',
    ];
}
