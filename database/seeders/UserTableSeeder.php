<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::where(['name'=> Role::ADMIN])->first();

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@xlflx.com',
            'password' => Hash::make('securetpassword133994'),
            'role_id' => $admin->id
        ]);


        $webcam_model = Role::where(['name' => Role::WEBCAM_MODEL])->first();

        User::create([
            'name' => 'Webcam Model User',
            'email' => 'model@xlflx.com',
            'password' => Hash::make('securetpassword133994'),
            'role_id' => $webcam_model->id
        ]);

        $user_role = Role::where(['name' => Role::USER])->first();

        User::create([
            'name' => 'Webcam User',
            'email' => 'user@xlflx.com',
            'password' => Hash::make('securetpassword133994'),
            'role_id' => $user_role->id
        ]);

    }
}
