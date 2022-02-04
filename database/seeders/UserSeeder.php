<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => getenv('LOGIN_USERNAME'),
            'email' => getenv('LOGIN_EMAIL'),
            'password' => bcrypt(getenv('LOGIN_PASSWORD'))
        ]);
    }
}
