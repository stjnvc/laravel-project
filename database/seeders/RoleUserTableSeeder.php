<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', 'admin@xlflx.com')->first();
        $model_user = User::where('email', 'model@xlflx.com')->first();
        $user = User::where('email', 'user@xlflx.com')->first();


        $adminRole = Role::where('name', Role::ADMIN)->first();
        $modelRole = Role::where('name', Role::WEBCAM_MODEL)->first();
        $userRole = Role::where('name', Role::USER)->first();

        $admin->roles()->attach($adminRole);
        $model_user->roles()->attach($modelRole);
        $user->roles()->attach($userRole);
    }
}
