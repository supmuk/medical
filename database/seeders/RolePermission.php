<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Doctor Permission
        Permission::create(['name' => 'list doctor']);
        Permission::create(['name' => 'edit doctor']);
        Permission::create(['name' => 'delete doctor']);
        Permission::create(['name' => 'add doctor']);

        $role1 = Role::create(['name' => 'doctor manager']);
        $role1->givePermissionTo('list doctor');
        $role1->givePermissionTo('edit doctor');
        $role1->givePermissionTo('delete doctor');
        $role1->givePermissionTo('add doctor');
        
        // Chemist permission
        Permission::create(['name' => 'list chemist']);
        Permission::create(['name' => 'edit chemist']);
        Permission::create(['name' => 'delete chemist']);
        Permission::create(['name' => 'add chemist']);

        $role2 = Role::create(['name' => 'chemist manager']);
        $role2->givePermissionTo('list chemist');
        $role2->givePermissionTo('edit chemist');
        $role2->givePermissionTo('delete chemist');
        $role2->givePermissionTo('add chemist');

        // Employee List
        Permission::create(['name' => 'list employee']);
        Permission::create(['name' => 'edit employee']);
        Permission::create(['name' => 'delete employee']);

        $role3 = Role::create(['name' => 'employee manager']);
        $role3->givePermissionTo('list employee');
        $role3->givePermissionTo('edit employee');
        $role3->givePermissionTo('delete employee');

        // Daily call report
        Permission::create(['name' => 'list daily call report']);
        Permission::create(['name' => 'edit daily call report']);
        Permission::create(['name' => 'add daily call report']);
        Permission::create(['name' => 'delete daily call report']);

        $role4 = Role::create(['name' => 'daily call report manager']);
        $role4->givePermissionTo('list daily call report');
        $role4->givePermissionTo('edit daily call report');
        $role4->givePermissionTo('add daily call report');
        $role4->givePermissionTo('delete daily call report');

        // List Tour 
        Permission::create(['name' => 'list tour program']);
        Permission::create(['name' => 'edit tour program']);
        Permission::create(['name' => 'add tour program']);
        Permission::create(['name' => 'delete tour program']);

        $role5 = Role::create(['name' => 'tour program manager']);
        $role5->givePermissionTo('list tour program');
        $role5->givePermissionTo('edit tour program');
        $role5->givePermissionTo('add tour program');
        $role5->givePermissionTo('delete tour program');

        // Standard Fare Chart
        Permission::create(['name' => 'list standard fare chart']);
        Permission::create(['name' => 'edit standard fare chart']);
        Permission::create(['name' => 'add standard fare chart']);
        Permission::create(['name' => 'delete standard fare chart']);

        $role6 = Role::create(['name' => 'standard fare chart manager']);
        $role6->givePermissionTo('list standard fare chart');
        $role6->givePermissionTo('edit standard fare chart');
        $role6->givePermissionTo('add standard fare chart');
        $role6->givePermissionTo('delete standard fare chart');

        // Headquarter 
        Permission::create(['name' => 'list headquarter']);
        Permission::create(['name' => 'edit headquarter']);
        Permission::create(['name' => 'add headquarter']);
        Permission::create(['name' => 'delete headquarter']);

        $role7 = Role::create(['name' => 'headquarter manager']);
        $role7->givePermissionTo('list headquarter');
        $role7->givePermissionTo('edit headquarter');
        $role7->givePermissionTo('add headquarter');
        $role7->givePermissionTo('delete headquarter');

        // List of working
        Permission::create(['name' => 'list place of working']);
        Permission::create(['name' => 'edit place of working']);
        Permission::create(['name' => 'add place of working']);
        Permission::create(['name' => 'delete place of working']);

        $role8 = Role::create(['name' => 'place of working manager']);
        $role8->givePermissionTo('list place of working');
        $role8->givePermissionTo('edit place of working');
        $role8->givePermissionTo('add place of working');
        $role8->givePermissionTo('delete place of working');

        // Product
        Permission::create(['name' => 'list product']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'add product']);
        Permission::create(['name' => 'delete product']);

        $role9 = Role::create(['name' => 'product manager']);
        $role9->givePermissionTo('list product');
        $role9->givePermissionTo('edit product');
        $role9->givePermissionTo('add product');
        $role9->givePermissionTo('delete product');

        // Page
        Permission::create(['name' => 'list page']);
        Permission::create(['name' => 'edit page']);
        Permission::create(['name' => 'delete page']);

        $role10 = Role::create(['name' => 'page manager']);
        $role10->givePermissionTo('list page');
        $role10->givePermissionTo('edit page');
        $role10->givePermissionTo('delete page');

        // Setting 
        Permission::create(['name' => 'list fare amount']);
        Permission::create(['name' => 'edit fare amount']);
        Permission::create(['name' => 'list direct allowance']);
        Permission::create(['name' => 'edit direct allowance']);

        $role10 = Role::create(['name' => 'setting manager']);
        $role10->givePermissionTo('list fare amount');
        $role10->givePermissionTo('edit fare amount');
        $role10->givePermissionTo('list direct allowance');
        $role10->givePermissionTo('edit direct allowance');
        
    }
}
