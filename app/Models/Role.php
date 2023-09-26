<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles'; // Имя таблицы ролей

    protected $fillable = [
        'name', 'slug',
    ];

    // Определите отношение, если необходимо
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
