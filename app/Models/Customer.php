<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'surname', 'phone', 'lineid', 'address', 'amphur', 'province', 'description','service_item1', 'service_item1_d',
        'service_item2', 'service_item2_d', 'service_item3', 'service_item3_d', 'service_item4', 'service_item4_d', 'service_item5', 'service_item5_d'
    ];

}
