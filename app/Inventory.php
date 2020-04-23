<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'quantity',
        'location',
        'x_ref',
        'request_on',
        'requested_by'
    ];

    protected $dates = ['deleted_at'];
}
