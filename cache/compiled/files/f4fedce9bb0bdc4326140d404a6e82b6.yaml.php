<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Coco_/Documents/GitHub/blog-phil/user/themes/masonry/blueprints/post.yaml',
    'modified' => 1550526844,
    'data' => [
        'title' => 'Home',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'header.cover' => [
                    'type' => 'file',
                    'label' => 'banner image',
                    'multiple' => false,
                    'destination' => 'self@',
                    'random_name' => true,
                    'avoid_overwriting' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'header.taxonomy.tag' => [
                    'type' => 'selectize',
                    'label' => 'Tag',
                    'classes' => 'fancy',
                    'default' => 'blog'
                ],
                'header.taxonomy.category' => [
                    'type' => 'selectize',
                    'label' => 'Category',
                    'classes' => 'fancy',
                    'default' => 'blog-post',
                    'validate' => NULL
                ]
            ]
        ]
    ]
];
