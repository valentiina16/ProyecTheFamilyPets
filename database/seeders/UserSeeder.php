<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $user = User::create([
            'name' => 'Administrador',
            'apellido' => 'Admin',
            'direccion_usuario' => 'Popayán',
            'cedula' => '100276641',
            'celular_usuario' => '3124649246',
            'foto_usuario' => 'foto_usuario.jpg',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('admin');
    }
}
