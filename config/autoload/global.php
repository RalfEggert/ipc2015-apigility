<?php
return array(
    'db' => array(
        'adapters' => array(
            'MySQL Adapter' => array(),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'User\\V1' => 'http basic authentication',
                'Shop\\V1' => 'http basic authentication',
            ),
        ),
    ),
);
