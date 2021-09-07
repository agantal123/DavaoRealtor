<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRoles;

class user_roles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $UserRoles = UserRoles::create([
                    'type' => 'admin',
                ]);
         $UserRoles = UserRoles::create([
                    'type' => 'broker',
                ]);
        $UserRoles = UserRoles::create([
                    'type' => 'salesperson',
                ]);
    }
}
