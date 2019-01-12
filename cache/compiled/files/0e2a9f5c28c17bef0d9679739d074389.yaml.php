<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Coco_/Documents/GitHub/blog-phil/user/themes/masonry/blueprints/archive.yaml',
    'modified' => 1546911042,
    'data' => [
        'title' => 'Home',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'header.image' => [
                    'type' => 'file',
                    'label' => 'banner image',
                    'multiple' => false,
                    'destination' => 'self@',
                    'random_name' => true,
                    'avoid_overwriting' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ]
        ]
    ]
];
