<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدم',
    ],
    'permission' => [
        'title'          => 'المهام',
        'title_singular' => 'المهمة',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'الوظائف',
        'title_singular' => 'وظيفة',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'مستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'customer' => [
        'title'          => 'الزبائن',
        'title_singular' => 'الزبائن',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'الإسم',
            'name_helper'           => ' ',
            'address'               => 'العنوان',
            'address_helper'        => ' ',
            'phone'                 => 'رقم الهاتف',
            'phone_helper'          => ' ',
            'email'                 => 'الايميل',
            'email_helper'          => ' ',
            'facebook'              => 'فيسبوك',
            'facebook_helper'       => ' ',
            'code'                  => 'الكود',
            'code_helper'           => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'identification'        => 'إثبات الشخصية',
            'identification_helper' => ' ',
        ],
    ],
    'operation' => [
        'title'          => 'العمليات',
        'title_singular' => 'العمليات',
    ],
    'device' => [
        'title'          => 'الأجهزة',
        'title_singular' => 'الأجهزة',
    ],
    'brand' => [
        'title'          => 'العلامات التجارية',
        'title_singular' => 'العلامات التجارية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'العلامة التجارية',
            'name_helper'       => ' ',
            'logo'              => 'شعار العلامة',
            'logo_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'phone' => [
        'title'          => 'الهواتف',
        'title_singular' => 'الهواتف',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'إسم الهاتف',
            'name_helper'       => 'مثال ( جلاكسي نوت 6)',
            'brand'             => 'العلامة التجارية',
            'brand_helper'      => ' ',
            'state'             => 'حالة الهاتف',
            'state_helper'      => ' ',
            'notes'             => 'الملاحظات',
            'notes_helper'      => 'مثال (كسر في الشاشة الامامية)',
            'battery'           => 'حالة البطارية',
            'battery_helper'    => ' ',
            'images'            => 'صور الهاتف',
            'images_helper'     => ' ',
            'price'             => 'سعر الهاتف',
            'price_helper'      => ' ',
            'serial'            => 'الرقم التسلسلي',
            'serial_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'sale' => [
        'title'          => 'المعاملات',
        'title_singular' => 'المعاملات',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'customer'           => 'إسم الزبون',
            'customer_helper'    => ' ',
            'phone'              => 'إسم الهاتف',
            'phone_helper'       => ' ',
            'total_price'        => 'السعر الكلي',
            'total_price_helper' => ' ',
            'notes'              => 'الملاحظات',
            'notes_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'operation'          => 'نوع العملية',
            'operation_helper'   => ' ',
        ],
    ],
    'swap' => [
        'title'          => 'المقايضة',
        'title_singular' => 'المقايضة',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'customer'               => 'إسم الزبون',
            'customer_helper'        => ' ',
            'phone_1'                => ' هاتف الزبون الاول',
            'phone_1_helper'         => ' ',
            'phone_2'                => 'هاتف الزبون الثاني',
            'phone_2_helper'         => ' ',
            'price_diffrance'        => 'مبلغ الفرق',
            'price_diffrance_helper' => ' ',
            'notes'                  => 'الملاحظات',
            'notes_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
];
