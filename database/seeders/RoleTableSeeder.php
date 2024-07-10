<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => Role::ADMIN, 'description' => 'Application admin.']);
        Role::create(['name' => Role::WEBCAM_MODEL, 'description' => 'Webcam model.']);
        Role::create(['name' => Role::USER, 'description' => 'Application user.']);
    }
}
