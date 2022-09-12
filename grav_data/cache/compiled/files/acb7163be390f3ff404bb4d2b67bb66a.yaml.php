<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/aaronsosaruiz/Proyectos/blog/grav_data/user/accounts/admin_aaron.yaml',
    'modified' => 1658418586,
    'size' => 561,
    'data' => [
        'state' => 'enabled',
        'email' => 'aasoru@gmail.com',
        'fullname' => 'Aaron Sosa',
        'title' => 'Administrador',
        'language' => 'es',
        'content_editor' => 'codemirror',
        'twofa_enabled' => false,
        'twofa_secret' => 'TCA5DYBSPIU24TVZGKRHVRCJIBMDHQI4',
        'avatar' => [
            
        ],
        'hashed_password' => '$2y$10$zGwriXJ.a0CllbDZLvt2s.oNd7UvMuJ.pZGoE//kC2Byd0c9XgAdm',
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true,
                'gantry' => true
            ]
        ]
    ]
];
