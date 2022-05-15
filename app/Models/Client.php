<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';

    public function pic()
    {
        return $this->hasMany(ClientPic::class);
    }

    public function address()
    {
        return $this->hasMany(ClientAddress::class);
    }
}
