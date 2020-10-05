<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	use HasFactory;
     protected $table='rooms';
    protected $fillable=['room_name', 'room_number', 'room_type', 'price', 'max_capacity', 'num_of_bed', 'descriptions', 'facilities', 'image', 'available', 'publish'];
}
