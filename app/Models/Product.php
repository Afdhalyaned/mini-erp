<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategories::class, 'category_id', 'id');
    }

    public function priceBuying()
    {
        return $this->hasMany(PriceBuying::class, 'product_id', 'id');
    }

    public function priceSelling()
    {
        return $this->hasOne(PriceSelling::class, 'product_id', 'id');
    }
}
