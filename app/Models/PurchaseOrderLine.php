<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderLine extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'qty',
        'price',
        'discount',
        'total',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
