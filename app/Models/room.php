<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_type_id',
    ];
    public function room_type()
    {
        return $this->belongsTo(room_type::class);
    }
    public function booking()
    {
        return $this->hasMany(booking::class);
    }
}
