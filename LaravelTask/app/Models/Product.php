<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;

class Product extends Model
{
    use HasFactory;

    public function Details() 
    {
        return $this->belongsTo(OrderDetail::class);
    }
}