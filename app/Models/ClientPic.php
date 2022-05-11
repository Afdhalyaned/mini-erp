<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPic extends Model
{
    use HasFactory;
    protected $table = 'client_pic';

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
