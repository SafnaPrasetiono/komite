<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events_register extends Model
{
    use HasFactory;

    protected $table = 'events_registers';

    protected $primaryKey = 'id_events_member';

    protected $fillable = [
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
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
        'events_id',
    ];
}
