<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/themes/g5_helium/blueprints.yaml',
    'modified' => 1655280780,
    'size' => 502,
    'data' => [
        'name' => 'Helium',
        'version' => '5.5.14',
        'description' => 'Default Gantry 5 theme.',
        'icon' => 'gantry',
        'author' => [
            'name' => 'RocketTheme',
            'email' => 'support@rockettheme.com',
            'url' => 'http://www.rockettheme.com'
        ],
        'homepage' => 'http://gantry.org',
        'readme' => 'https://github.com/gantry/gantry5/blob/master/README.md',
        'keywords' => 'gantry, gantry5, theme',
        'bugs' => 'https://github.com/gantry/gantry5/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7'
            ],
            1 => [
                'name' => 'gantry5',
                'version' => '>=5.5'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => NULL
        ]
    ]
];
