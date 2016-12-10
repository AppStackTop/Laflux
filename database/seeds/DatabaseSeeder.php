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
         $this->call(UsersSeeder::class);
         $this->call(GroupsSeeder::class);
         $this->call(ExtensionManagerSeeder::class);
         $this->call(ACLSeeder::class);
         $this->call(ExtensionsMSeeder::class);
    }
}
