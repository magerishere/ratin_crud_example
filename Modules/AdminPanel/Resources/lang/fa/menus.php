<?php

return [
    'back' => [
        [
            'title' => 'داشبورد',
            'route_name' => 'admin.dashboard',
        ],
        [
            'title' => 'کاربران',
            'children' => [
                [
                    'title' => 'لیست کاربران',
                    'route_name' => 'admin.dashboard',
                ]
            ],
        ],
    ],
];
