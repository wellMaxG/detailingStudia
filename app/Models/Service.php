<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_minutes',
        'is_public',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

//     public function isPublic()
// {
//     return $this->is_public;
}
// public function isAdmin()
// {
//     return $this->role === 'admin';
// }

// }
