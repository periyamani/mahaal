<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    
    protected $table ='booking';
    protected $fillable = ['booking_date','booking_time','vendor','booking_status','payment_status','active','user_id'];
}

