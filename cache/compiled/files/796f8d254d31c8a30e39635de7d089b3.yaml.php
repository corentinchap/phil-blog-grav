<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://archive_plus/archive_plus.yaml',
    'modified' => 1550259173,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'show' => [
            'counter' => true,
            'year' => true,
            'month' => true,
            'items' => true
        ],
        'limit' => [
            'year' => 2,
            'month' => 12,
            'items' => 40
        ],
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filter_combinator' => 'and',
        'filters' => [
            'category' => 'blog-post'
        ]
    ]
];
