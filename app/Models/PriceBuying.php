<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceBuying extends Model
{
    use HasFactory;

    protected $table = 'price_buying';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
