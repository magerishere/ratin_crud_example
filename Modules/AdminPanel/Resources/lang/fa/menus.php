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
                ]
            ],
        ],
    ],
];
