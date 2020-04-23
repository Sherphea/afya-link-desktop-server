<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceItem extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'inventory_id',
        'purchase_cost',
        'vendor_item_number',
        'quantity',
        'serial_lot_number',
        'expiration_date'
    ];

    protected $dates = ['deleted_at'];


    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
