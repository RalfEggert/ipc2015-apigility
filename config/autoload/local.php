<?php
return array(
    'zf-mvc-auth' => array(
        'authentication' => array(
            'adapters' => array(
                'http basic authentication' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\HttpAdapter',
                    'options' => array(
                        'accept_schemes' => array(
                            0 => 'basic',
                        ),
                        'realm' => 'api',
                        'htpasswd' => 'data/users.htpasswd',
                    ),
                ),
            ),
        ),
    ),
    'db' => array(
        'adapters' => array(
            'MySQL Adapter' => array(
                'charset' => 'utf8',
                'database' => 'ipc2015.user',
                'driver' => 'PDO_Mysql',
                'hostname' => 'localhost',
                'username' => 'ipc2015',
                'password' => 'ipc2015',
            ),
        ),
    ),
);
