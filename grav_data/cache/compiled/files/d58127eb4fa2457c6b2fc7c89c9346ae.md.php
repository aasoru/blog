<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/usr/share/nginx/html/user/pages/03.blog/blog.md',
    'modified' => 1657405932,
    'size' => 297,
    'data' => [
        'header' => [
            'title' => 'Home',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'leading' => 1,
                'columns' => 3,
                'limit' => 7,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'show_date' => true,
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'dateformat' => 'd-m-Y H:i'
        ],
        'frontmatter' => 'title: Home
content:
    items:
        - \'@self.children\'
    leading: 1
    columns: 3
    limit: 7
    order:
        by: date
        dir: desc
    show_date: true
    pagination: true
    url_taxonomy_filters: true
process:
    markdown: true
    twig: false
dateformat: \'d-m-Y H:i\'',
        'markdown' => ''
    ]
];
