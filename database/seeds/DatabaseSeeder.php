<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('admins')->insert(['username' => 'admin', 'email' => 'nitish.dola@gmail.com', 'password' => bcrypt('password')]);

        $this->command->info('Admin Added !');
    }
}
