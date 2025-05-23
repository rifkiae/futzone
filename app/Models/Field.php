<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'price_per_hour',
        'is_available',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'price_per_hour' => 'float',
        'is_available' => 'boolean',
    ];

    /**
     * Get the bookings for the field.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}