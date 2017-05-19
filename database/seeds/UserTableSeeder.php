<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role_admin = Role::where('name', 'admin')->first();
        $id_role=$role_admin->id;
        $role_user = Role::where('name', 'user')->first();
        $id_user=$role_user->id;

        $admin = new User();
        $admin->role_id = $id_role;
        $admin->name = 'Hassen ben abdelhafidh';
        $admin->email = 'benabdelhafidh.hassen@gmail.com';
        $admin->password = bcrypt('111111');
        $admin->verified=true;
        $admin->save();
        
        $user = new User();
        $user->role_id = $id_user;
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('111111');
        $user->verified=true;
        $user->save();
        

       
    }
}
