<?php

return [
    'role_structure' => [
        'manager' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'teacher' => [
            'profile' => 'r,u'
        ],
        'otherstaff' => [
            'profile' => 'r,u'
        ],
        'student' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
