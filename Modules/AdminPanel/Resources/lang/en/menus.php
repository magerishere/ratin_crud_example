<?php

return [
    'back' => [
        [
            'title' => 'Dashboard',
            'route_name' => 'admin.dashboard',
        ],
        [
            'title' => 'Users',
            'route_name' => 'admin.users.*',
            'children' => [
                [
                    'title' => 'Users List',
                    'route_name' => 'admin.users.index',
                    'breadcrumbs' => [
                        [
                            'title' => 'Users List',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
