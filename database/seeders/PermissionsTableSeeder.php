<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'customer_create',
            ],
            [
                'id'    => 18,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 19,
                'title' => 'customer_show',
            ],
            [
                'id'    => 20,
                'title' => 'customer_delete',
            ],
            [
                'id'    => 21,
                'title' => 'customer_access',
            ],
            [
                'id'    => 22,
                'title' => 'operation_access',
            ],
            [
                'id'    => 23,
                'title' => 'device_access',
            ],
            [
                'id'    => 24,
                'title' => 'brand_create',
            ],
            [
                'id'    => 25,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 26,
                'title' => 'brand_show',
            ],
            [
                'id'    => 27,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 28,
                'title' => 'brand_access',
            ],
            [
                'id'    => 29,
                'title' => 'phone_create',
            ],
            [
                'id'    => 30,
                'title' => 'phone_edit',
            ],
            [
                'id'    => 31,
                'title' => 'phone_show',
            ],
            [
                'id'    => 32,
                'title' => 'phone_delete',
            ],
            [
                'id'    => 33,
                'title' => 'phone_access',
            ],
            [
                'id'    => 34,
                'title' => 'sale_create',
            ],
            [
                'id'    => 35,
                'title' => 'sale_edit',
            ],
            [
                'id'    => 36,
                'title' => 'sale_show',
            ],
            [
                'id'    => 37,
                'title' => 'sale_delete',
            ],
            [
                'id'    => 38,
                'title' => 'sale_access',
            ],
            [
                'id'    => 39,
                'title' => 'swap_create',
            ],
            [
                'id'    => 40,
                'title' => 'swap_edit',
            ],
            [
                'id'    => 41,
                'title' => 'swap_show',
            ],
            [
                'id'    => 42,
                'title' => 'swap_delete',
            ],
            [
                'id'    => 43,
                'title' => 'swap_access',
            ],
            [
                'id'    => 44,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
