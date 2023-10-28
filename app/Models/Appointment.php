<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [

        'client_name',
        'service_id',
        'phone',
        'appointment_date',
        'appointment_time',
        'status',
        'question',
        'user_id'

    ];

  

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeOrderByDate($query)
    {
        return $query->orderBy('appointment_date', 'asc');
    }
    public function scopeNextRecords($query)
{
    return $query->where('appointment_date', '>=', Today())->orderBy('appointment_date', 'asc');
}

}

