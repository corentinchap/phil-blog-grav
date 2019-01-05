<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Coco_/Documents/GitHub/blog-phil/user/config/site.yaml',
    'modified' => 1545550608,
    'data' => [
        'title' => 'Phil\'s Scheiss',
        'default_lang' => 'ger',
        'author' => [
            'name' => 'Phil Reiss',
            'email' => 'joe@example.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Ich mag Bradwursten und Blog schreiben',
            'author' => 'Phil Reiss',
            'keywords' => 'blog, travelling, writing'
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
        'description' => 'Ich mag Bradwursten und Blog schreiben',
        'logo' => 'user/logo.svg',
        'date_long' => 'd F Y',
        'date_short' => 'd M Y'
    ]
];
