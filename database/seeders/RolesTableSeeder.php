<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Создание ролей
        Role::create([
            'name' => 'Администратор',
            'slug' => 'admin',
        ]);

        Role::create([
            'name' => 'Модератор',
            'slug' => 'moderator',
        ]);

        Role::create([
            'name' => 'Пользователь',
            'slug' => 'user',
        ]);

    }
}
