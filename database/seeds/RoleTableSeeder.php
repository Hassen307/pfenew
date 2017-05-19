<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RoleTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
// create admin role this way
$admin = new Role();
$admin->name = 'admin';
$admin->display_name = 'Admin'; // optional
$admin->description = 'admin'; // optional
$admin->save();

$user = new Role();
$user->name = 'user';
$user->display_name = 'User'; // optional
$user->description = 'simple User '; // optional
$user->save();

$permissions1 = Permission::pluck('id');

// and assign all permission like as below
foreach ($permissions1 as $permission) {
$admin->attachPermission($permission);
}
 $permissions2 = Permission::where('id','=','1')->first();
$user->attachPermission($permissions2);
}
}
