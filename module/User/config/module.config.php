<?php
return array(
    'router' => array(
        'routes' => array(
            'user.rest.profile' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/profile[/:profile_id]',
                    'defaults' => array(
                        'controller' => 'User\\V1\\Rest\\Profile\\Controller',
                    ),
                ),
            ),
            'user.rest.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'User\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'user.rest.profile',
            1 => 'user.rest.user',
        ),
    ),
    'zf-rest' => array(
        'User\\V1\\Rest\\Profile\\Controller' => array(
            'listener' => 'User\\V1\\Rest\\Profile\\ProfileResource',
            'route_name' => 'user.rest.profile',
            'route_identifier_name' => 'profile_id',
            'collection_name' => 'profile',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'User\\V1\\Rest\\Profile\\ProfileEntity',
            'collection_class' => 'User\\V1\\Rest\\Profile\\ProfileCollection',
            'service_name' => 'profile',
        ),
        'User\\V1\\Rest\\User\\Controller' => array(
            'listener' => 'User\\V1\\Rest\\User\\UserResource',
            'route_name' => 'user.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'User\\V1\\Rest\\User\\UserEntity',
            'collection_class' => 'User\\V1\\Rest\\User\\UserCollection',
            'service_name' => 'user',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'User\\V1\\Rest\\Profile\\Controller' => 'HalJson',
            'User\\V1\\Rest\\User\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'User\\V1\\Rest\\Profile\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'User\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'User\\V1\\Rest\\Profile\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
            ),
            'User\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'User\\V1\\Rest\\Profile\\ProfileEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.profile',
                'route_identifier_name' => 'profile_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V1\\Rest\\Profile\\ProfileCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.profile',
                'route_identifier_name' => 'profile_id',
                'is_collection' => true,
            ),
            'User\\V1\\Rest\\User\\UserEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V1\\Rest\\User\\UserCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'User\\V1\\Rest\\Profile\\ProfileResource' => array(
                'adapter_name' => 'MySQL Adapter',
                'table_name' => 'profile',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V1\\Rest\\Profile\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'User\\V1\\Rest\\User\\UserResource' => array(
                'adapter_name' => 'MySQL Adapter',
                'table_name' => 'user',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V1\\Rest\\User\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'User\\V1\\Rest\\Profile\\Controller' => array(
            'input_filter' => 'User\\V1\\Rest\\Profile\\Validator',
        ),
        'User\\V1\\Rest\\User\\Controller' => array(
            'input_filter' => 'User\\V1\\Rest\\User\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'User\\V1\\Rest\\Profile\\Validator' => array(
            0 => array(
                'name' => 'firstname',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'lastname',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'country',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'description',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
        ),
        'User\\V1\\Rest\\User\\Validator' => array(
            0 => array(
                'name' => 'changed',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'profile',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'MySQL Adapter',
                            'table' => 'profile',
                            'field' => 'id',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'login',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'password',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
