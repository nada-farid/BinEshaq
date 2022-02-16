<?php

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
                'title' => 'experience_create',
            ],
            [
                'id'    => 18,
                'title' => 'experience_edit',
            ],
            [
                'id'    => 19,
                'title' => 'experience_show',
            ],
            [
                'id'    => 20,
                'title' => 'experience_delete',
            ],
            [
                'id'    => 21,
                'title' => 'experience_access',
            ],
            [
                'id'    => 22,
                'title' => 'service_create',
            ],
            [
                'id'    => 23,
                'title' => 'service_edit',
            ],
            [
                'id'    => 24,
                'title' => 'service_show',
            ],
            [
                'id'    => 25,
                'title' => 'service_delete',
            ],
            [
                'id'    => 26,
                'title' => 'service_access',
            ],
            [
                'id'    => 27,
                'title' => 'project_create',
            ],
            [
                'id'    => 28,
                'title' => 'project_edit',
            ],
            [
                'id'    => 29,
                'title' => 'project_show',
            ],
            [
                'id'    => 30,
                'title' => 'project_delete',
            ],
            [
                'id'    => 31,
                'title' => 'project_access',
            ],
            [
                'id'    => 32,
                'title' => 'product_create',
            ],
            [
                'id'    => 33,
                'title' => 'product_edit',
            ],
            [
                'id'    => 34,
                'title' => 'product_show',
            ],
            [
                'id'    => 35,
                'title' => 'product_delete',
            ],
            [
                'id'    => 36,
                'title' => 'product_access',
            ],
            [
                'id'    => 37,
                'title' => 'news_create',
            ],
            [
                'id'    => 38,
                'title' => 'news_edit',
            ],
            [
                'id'    => 39,
                'title' => 'news_show',
            ],
            [
                'id'    => 40,
                'title' => 'news_delete',
            ],
            [
                'id'    => 41,
                'title' => 'news_access',
            ],
            [
                'id'    => 42,
                'title' => 'appointment_create',
            ],
            [
                'id'    => 43,
                'title' => 'appointment_edit',
            ],
            [
                'id'    => 44,
                'title' => 'appointment_show',
            ],
            [
                'id'    => 45,
                'title' => 'appointment_delete',
            ],
            [
                'id'    => 46,
                'title' => 'appointment_access',
            ],
            [
                'id'    => 47,
                'title' => 'contact_access',
            ],
            [
                'id'    => 48,
                'title' => 'employment_create',
            ],
            [
                'id'    => 49,
                'title' => 'employment_edit',
            ],
            [
                'id'    => 50,
                'title' => 'employment_show',
            ],
            [
                'id'    => 51,
                'title' => 'employment_delete',
            ],
            [
                'id'    => 52,
                'title' => 'employment_access',
            ],
            [
                'id'    => 53,
                'title' => 'contactu_create',
            ],
            [
                'id'    => 54,
                'title' => 'contactu_edit',
            ],
            [
                'id'    => 55,
                'title' => 'contactu_show',
            ],
            [
                'id'    => 56,
                'title' => 'contactu_delete',
            ],
            [
                'id'    => 57,
                'title' => 'contactu_access',
            ],
            [
                'id'    => 58,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 59,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 60,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 61,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 62,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 63,
                'title' => 'slider_create',
            ],
            [
                'id'    => 64,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 65,
                'title' => 'slider_show',
            ],
            [
                'id'    => 66,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 67,
                'title' => 'slider_access',
            ],
            [
                'id'    => 68,
                'title' => 'distributor_create',
            ],
            [
                'id'    => 69,
                'title' => 'distributor_edit',
            ],
            [
                'id'    => 70,
                'title' => 'distributor_show',
            ],
            [
                'id'    => 71,
                'title' => 'distributor_delete',
            ],
            [
                'id'    => 72,
                'title' => 'distributor_access',
            ],
            [
                'id'    => 73,
                'title' => 'subscription_create',
            ],
            [
                'id'    => 74,
                'title' => 'subscription_edit',
            ],
            [
                'id'    => 75,
                'title' => 'subscription_show',
            ],
            [
                'id'    => 76,
                'title' => 'subscription_delete',
            ],
            [
                'id'    => 77,
                'title' => 'subscription_access',
            ],
            [
                'id'    => 78,
                'title' => 'company_development_create',
            ],
            [
                'id'    => 79,
                'title' => 'company_development_edit',
            ],
            [
                'id'    => 80,
                'title' => 'company_development_show',
            ],
            [
                'id'    => 81,
                'title' => 'company_development_delete',
            ],
            [
                'id'    => 82,
                'title' => 'company_development_access',
            ],
            [
                'id'    => 83,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
