<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Role Types
         *
         */
        $RoleItems = [
            [
                'name'        => 'Admin',
                'slug'        => 'admin',
                'description' => 'Admin Role',
                'level'       => 6,
            ],
            [
                'name'        => 'Manager',
                'slug'        => 'manager',
                'description' => 'مدير',
                'level'       => 5,
            ],
            [
                'name'        => 'Secretary',
                'slug'        => 'secretary',
                'description' => 'سكرتير',
                'level'       => 4,
            ],
            [
                'name'        => 'Teacher',
                'slug'        => 'teacher',
                'description' => 'أستاذ',
                'level'       => 3,
            ],
            [
                'name'        => 'Student',
                'slug'        => 'student',
                'description' => 'طالب',
                'level'       => 2,
            ],
            [
                'name'        => 'User',
                'slug'        => 'user',
                'description' => 'مستخدم',
                'level'       => 1,
            ],
            [
                'name'        => 'Unverified',
                'slug'        => 'unverified',
                'description' => 'غير معرف',
                'level'       => 0,
            ],
        ];

        /*
         * Add Role Items
         *
         */
        foreach ($RoleItems as $RoleItem) {
            $newRoleItem = config('roles.models.role')::where('slug', '=', $RoleItem['slug'])->first();
            if ($newRoleItem === null) {
                $newRoleItem = config('roles.models.role')::create([
                    'name'          => $RoleItem['name'],
                    'slug'          => $RoleItem['slug'],
                    'description'   => $RoleItem['description'],
                    'level'         => $RoleItem['level'],
                ]);

            }else{
                $newRoleItem->update([
                    'name'          => $RoleItem['name'],
                    'slug'          => $RoleItem['slug'],
                    'description'   => $RoleItem['description'],
                    'level'         => $RoleItem['level'],
                ])->save();
            }
        }
    }
}
