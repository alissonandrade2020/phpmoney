<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Alisson de Andrade Araújo',
            'cpf'       => '3XXXXXXXXXX',
            'email'     => 'alissonpicpay@hotmail.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Outro Usuário',
            'cpf'       => '1XXXXXXXXXX',
            'email'     => 'testando@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
