<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'client_id',
        'client_name',
        'service_id',
        'appointment_datetime',
        'status',
    ];

    // public function client()
    // {
    //     return $this->belongsTo(Client::class);
    // }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // public function employee()
    // {
    //     return $this->belongsTo(Employee::class);
    // }
}

