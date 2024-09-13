<?php
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::create([
            'full_name' => 'Admin Magesa',
            'email' => 'admin01@example.com',
            'password' => bcrypt('123'),
            'role' => 'admin', // Make sure this matches your AdminMiddleware check
            'phone'=>'07890997'
        ]);

        // Optionally, create other users
        // User::factory(10)->create();
    }
}
