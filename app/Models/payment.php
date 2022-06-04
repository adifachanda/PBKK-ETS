<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'booking_id',
        'payment_type',
        'first_name',
    ];
    public function booking(){
        return $this->belongsTo(booking::class);
    }
}
