<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAddress extends Model
{
    use HasFactory;

    protected $table = 'client_address';

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
