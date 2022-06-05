<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'room_id',
        'check_in',
        'check_out',
        'total_price',
        'booking_status',
        'total_nights'
    ];
    public function bookingforUser()
    {
        return $this->belongsTo(User::class);
    }
    public function bookingforRoom()
    {
        return $this->belongsToMany(room::class);
    }
    public function bookingforPayment()
    {
        return $this->hasOne(payment::class);
    }
}
