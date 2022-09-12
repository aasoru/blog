<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/usr/share/nginx/html/user/pages/03.pages/02.blog/blog_list.md',
    'modified' => 1658418586,
    'size' => 429,
    'data' => [
        'header' => [
            'title' => 'Blog Page',
            'blog_url' => 'blog',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 1.03
            ],
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 5,
                'pagination' => true,
                'show_date' => false,
                'leading' => 0,
                'columns' => 2,
                'url_taxonomy_filters' => true
            ],
            'feed' => [
                'description' => 'Sample Blog Description',
                'limit' => 10
            ],
            'pagination' => true,
            'login' => [
                'visibility_requires_access' => false
            ]
        ],
        'frontmatter' => 'title: \'Blog Page\'
blog_url: blog
sitemap:
    changefreq: monthly
    priority: 1.03
content:
    items:
        - \'@self.children\'
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true
    show_date: false
    leading: 0
    columns: 2
    url_taxonomy_filters: true
feed:
    description: \'Sample Blog Description\'
    limit: 10
pagination: true
login:
    visibility_requires_access: false',
        'markdown' => ''
    ]
];
