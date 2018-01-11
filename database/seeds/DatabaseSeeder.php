<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        $this->call('UserTableSeeder');
        $this->command->info('User Table Seeded!');
        // $this->call(UsersTableSeeder::class);
    }
}

class UserTableSeeder extends Seeder {
    public function run()
    {
          DB::table('users')->delete();
          DB::table('users')->insert([
          'username' => 'admin',
          'email' => 'admin@Example.com',
          'password' => Hash::make('0d675927db5aeaeb7af833fd81'),
          'name' => 'Admin',
          'role_id' => '1',
          'created_at' => date('Y-m-d H:i:s')
          ]);
    }
}
