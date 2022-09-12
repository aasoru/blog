<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/aaronsosaruiz/Proyectos/blog/grav_data/user/pages/03.pages/01.modular/modular.md',
    'modified' => 1658418586,
    'size' => 310,
    'data' => [
        'header' => [
            'title' => 'Modular Page',
            'onpage_menu' => true,
            'body_classes' => 'modular header-image fullwidth',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_showcase',
                        1 => '_highlights',
                        2 => '_callout',
                        3 => '_features'
                    ]
                ]
            ],
            'published' => false
        ],
        'frontmatter' => 'title: \'Modular Page\'
onpage_menu: true
body_classes: \'modular header-image fullwidth\'
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _showcase
            - _highlights
            - _callout
            - _features
published: false',
        'markdown' => ''
    ]
];
