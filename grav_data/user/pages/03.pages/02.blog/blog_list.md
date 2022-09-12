---
title: 'Blog Page'
blog_url: blog
sitemap:
    changefreq: monthly
    priority: 1.03
content:
    items:
        - '@self.children'
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
    description: 'Sample Blog Description'
    limit: 10
pagination: true
login:
    visibility_requires_access: false
---

