<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'shop_driver' => array(
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    0 => __DIR__ . '/../src/Shop/V1/Entity',
                ),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Shop\\V1\\Entity' => 'shop_driver',
                ),
            ),
        ),
    ),
);