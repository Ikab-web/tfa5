<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Maya Santos', 'email' => 'maya.santos@example.com', 'phone' => '(02) 8123-4501', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Liam Reyes', 'email' => 'liam.reyes@example.com', 'phone' => '(02) 8123-4502', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofia Cruz', 'email' => 'sofia.cruz@example.com', 'phone' => '(02) 8123-4503', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Noah Garcia', 'email' => 'noah.garcia@example.com', 'phone' => '(02) 8123-4504', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Isabella Flores', 'email' => 'isabella.flores@example.com', 'phone' => '(02) 8123-4505', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('pos_users')->insert([
            ['name' => 'Avery Morgan', 'username' => 'amorgan', 'role' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jordan Lee', 'username' => 'jlee', 'role' => 'Manager', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Casey Patel', 'username' => 'cpatel', 'role' => 'Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Riley Chen', 'username' => 'rchen', 'role' => 'Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taylor Brooks', 'username' => 'tbrooks', 'role' => 'Inventory Clerk', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
