<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/site.yaml',
    'modified' => 1658418586,
    'size' => 347,
    'data' => [
        'title' => 'Aarón Sosa Blog',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Aarón Sosa',
            'email' => 'aasoru@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Blog personal de Aarón Sosa - Desarrollo de software y algo más'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
