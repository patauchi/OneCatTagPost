<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

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
            'name' => 'Pavel Atauchi Rojas',
            'email'=> 'admin@admin.com',
            'password' => bcrypt('admin')
        ])->assignRole('Admin');


        User::factory(100)->create();
    }
}
