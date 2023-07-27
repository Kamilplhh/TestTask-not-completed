<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Worker extends Model
{
    use HasFactory;

    public function UserWorker() 
    {
        return $this->belongsTo(User::class);
    }
}