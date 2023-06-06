<?php

return [
    'back' => [
        [
            'title' => 'داشبورد',
            'route_name' => 'admin.dashboard',
        ],
        [
            'title' => 'کاربران',
            'route_name' => 'admin.users.*',
            'children' => [
                [
                    'title' => 'لیست کاربران',
                    'route_name' => 'admin.users.index',
                    'breadcrumbs' => [
                        [
                            'title' => 'لیست کاربران',
                        ],
                    ],
                ],
                [
                    'title' => 'ایجاد کاربر',
                    'route_name' => 'admin.users.create',
                    'breadcrumbs' => [
                        [
                            'title' => 'ایجاد کاربر',
                        ]
                    ],
                ],
                [
                    'title' => 'زباله دان کاربر',
                    'route_name' => 'admin.users.trashed.index',
                    'breadcrumbs' => [
                        [
                            'title' => 'زباله دان کاربر',
                        ]
                    ],
                ],
            ],
        ],
    ],
];
