<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_name',
        'price',
    ];

    public function room()
    {
        return $this->hasMany(room::class);
    }
}
