<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::created(['name' => 'admin']);
        Role::created(['name' => 'autheur']);
        Role::created(['name' => 'utilisateur']);
    }
}
