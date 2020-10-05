<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table='bookings';
    protected $fillable=['room_id', 'user_id', 'check_in_date', 'check_out_date', 'num_of_guest', 'room_type'];
}
