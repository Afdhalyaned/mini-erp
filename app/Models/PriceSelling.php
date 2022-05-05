<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceSelling extends Model
{
    use HasFactory;

    protected $table = 'price_selling';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
