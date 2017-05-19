<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
             [
        		'name' => 'ACCEUIL',
        		'display_name' => 'ACCEUIL'
        		
        	],
        	[
        		'name' => 'USERS',
        		'display_name' => 'USERS'
        		
        	],
        	[
        		'name' => 'ROLES',
        		'display_name' => 'ROLES'
        		
        	],
        	[
        		'name' => 'ITEMS',
        		'display_name' => 'ITEMS'
        		
        	]
        	
           
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    
    }
}
