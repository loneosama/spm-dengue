<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;
//use Hash;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = [

		];
		
		$perm_role = [
			['permission_id' => 1,
			'role_id' => 1
		],

		['permission_id' => 2,
		'role_id' => 1
		],

			['permission_id' => 3,
		'role_id' => 1
		],

	['permission_id' => 4,
	'role_id' => 1
	],
	
	['permission_id' => 5,
	'role_id' => 1
		],
		
		
['permission_id' => 6,
		'role_id' => 1
		],

['permission_id' => 7,
'role_id' => 1
],

['permission_id' => 8,
'role_id' => 1
],
	['permission_id' => 9,
'role_id' => 1
],

['permission_id' => 10,
'role_id' => 1
],

['permission_id' => 11,
'role_id' => 1
],
['permission_id' => 12,
'role_id' => 1
],
['permission_id' => 13,
'role_id' => 1
],
['permission_id' => 14,
'role_id' => 1
],
['permission_id' => 15,
'role_id' => 1
],
['permission_id' => 16,
'role_id' => 1
],
['permission_id' => 17,
'role_id' => 1
],
['permission_id' => 18,
'role_id' => 1
],
['permission_id' => 19,
'role_id' => 1
],
['permission_id' => 20,
'role_id' => 1
],
['permission_id' => 21,
'role_id' => 1
],
['permission_id' => 22,
'role_id' => 1
],
['permission_id' => 23,
'role_id' => 1
],
['permission_id' => 24,
'role_id' => 1
],
		];
		
		
		$roles = [
				['name' => 'super_user',
				'display_name' => 'Super User',
				'description' => 'The Super User'
				]
		];
        $permission = [
			[
        		'name' => 'user-list',
        		'display_name' => 'Display user Listing',
        		'description' => 'See only Listing Of user'
        	],
        	[
        		'name' => 'user-create',
        		'display_name' => 'Create user',
        		'description' => 'Create New user'
        	],
        	[
        		'name' => 'user-edit',
        		'display_name' => 'Edit user',
        		'description' => 'Edit user'
        	],
        	[
        		'name' => 'user-delete',
        		'display_name' => 'Delete user',
        		'description' => 'Delete user'
        	],
			[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
				'name' => 'role-create',
				'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
        	[
        		'name' => 'item-list',
        		'display_name' => 'Display Item Listing',
        		'description' => 'See only Listing Of Item'
        	],
        	[
        		'name' => 'item-create',
        		'display_name' => 'Create Item',
        		'description' => 'Create New Item'
        	],
        	[
        		'name' => 'item-edit',
        		'display_name' => 'Edit Item',
        		'description' => 'Edit Item'
        	],
        	[
        		'name' => 'item-delete',
        		'display_name' => 'Delete Item',
        		'description' => 'Delete Item'
        	],
        	[
        		'name' => 'initiative-list',
        		'display_name' => 'Display initiative Listing',
        		'description' => 'See only Listing Of initiative'
        	],
        	[
        		'name' => 'initiative-create',
        		'display_name' => 'Create initiative',
        		'description' => 'Create New initiative'
        	],
        	[
        		'name' => 'initiative-edit',
        		'display_name' => 'Edit initiative',
        		'description' => 'Edit initiative'
        	],
        	[
        		'name' => 'initiative-delete',
        		'display_name' => 'Delete initiative',
        		'description' => 'Delete initiative'
        	],
        	[
        		'name' => 'treatment-list',
        		'display_name' => 'Display Treatment Listing',
        		'description' => 'See only Listing Of Treatment'
        	],
        	[
        		'name' => 'treatment-create',
        		'display_name' => 'Create Treatment',
        		'description' => 'Create New Treatment'
        	],
        	[
        		'name' => 'treatment-edit',
        		'display_name' => 'Edit Treatment',
        		'description' => 'Edit Treatment'
        	],
        	[
        		'name' => 'treatment-delete',
        		'display_name' => 'Delete Treatment',
        		'description' => 'Delete Treatment'
        	],
        	[
        		'name' => 'patient-list',
        		'display_name' => 'Display patient Listing',
        		'description' => 'See only Listing Of patient'
        	],
        	[
        		'name' => 'patient-create',
        		'display_name' => 'Create patient',
        		'description' => 'Create New patient'
        	],
        	[
        		'name' => 'patient-edit',
        		'display_name' => 'Edit patient',
        		'description' => 'Edit patient'
        	],
        	[
        		'name' => 'patient-delete',
        		'display_name' => 'Delete patient',
        		'description' => 'Delete patient'
        	]
		]; 
		
		User::create([
			'name' => 'Osama',
			'email' => 'osama@osama.com',
			'password' => Hash::make('osamaarif')
		]);

        foreach ($permission as $key => $value) {
        	Permission::create($value);
		}
		foreach ($roles as $key => $value){
					Role::create($value);
		}
		foreach($perm_role as $key => $value){
			
				DB::table('permission_role')->insert(
					$value
				);	
			}
		$user = User::get();
		$role = Role::get();
		$user[0]->attachRole($role[0]);
    }
}
