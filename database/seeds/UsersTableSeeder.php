<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')-> truncate();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $autheur =User::create([
            'name' => 'autheur',
            'email' => 'autheur@autheur.com',
            'password' => Hash::make('password')
        ]);

        $utilisateur = User::create([
            'name' => 'utilisateur',
            'email' => 'utilisateur@utilisateur.com',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $autheurRole = Role::where('name', 'autheur')->first();
        $utilisateurRole = Role::where('name', 'utilisateur')->first();

        $admin->roles()->attach($adminRole);
        $autheur->roles()->attach($autheurRole);
        $utilisateur->roles()->attach($utilisateurRole);


    }
}
