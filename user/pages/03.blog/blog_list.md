---
title: Home
content:
    items:
        - '@self.children'
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
dateformat: 'd-m-Y H:i'
---

