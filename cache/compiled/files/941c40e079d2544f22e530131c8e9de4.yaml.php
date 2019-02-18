<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Coco_/Documents/GitHub/blog-phil/user/config/site.yaml',
    'modified' => 1550457358,
    'data' => [
        'title' => 'Willkommen bei meinem Blog',
        'default_lang' => 'ger',
        'author' => [
            'name' => 'Phil Reiss',
            'email' => 'reiss_philipp@web.de'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Reiseblog ',
            'author' => 'Philipp Reiss',
            'keywords' => 'blog, travelling, writing, Vietnam, Asien, Reisen, Ho Chi Minh'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog',
            'title' => 'Mediator'
        ],
        'description' => '',
        'logo' => 'user/logo.png',
        'date_long' => 'd F Y',
        'date_short' => 'd M Y'
    ]
];
