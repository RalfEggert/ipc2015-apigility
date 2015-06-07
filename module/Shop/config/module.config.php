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
    'router' => array(
        'routes' => array(
            'shop.rest.doctrine.address' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/address[/:address_id]',
                    'defaults' => array(
                        'controller' => 'Shop\\V1\\Rest\\Address\\Controller',
                    ),
                ),
            ),
            'shop.rest.doctrine.customer' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/customer[/:customer_id]',
                    'defaults' => array(
                        'controller' => 'Shop\\V1\\Rest\\Customer\\Controller',
                    ),
                ),
            ),
            'shop.rest.doctrine.product' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/product[/:product_id]',
                    'defaults' => array(
                        'controller' => 'Shop\\V1\\Rest\\Product\\Controller',
                    ),
                ),
            ),
            'shop.rest.doctrine.booking' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/booking[/:booking_id]',
                    'defaults' => array(
                        'controller' => 'Shop\\V1\\Rest\\Booking\\Controller',
                    ),
                ),
            ),
            'shop.rest.doctrine.bookingposition' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/bookingposition[/:bookingposition_id]',
                    'defaults' => array(
                        'controller' => 'Shop\\V1\\Rest\\Bookingposition\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'shop.rest.doctrine.address',
            1 => 'shop.rest.doctrine.customer',
            2 => 'shop.rest.doctrine.product',
            3 => 'shop.rest.doctrine.booking',
            4 => 'shop.rest.doctrine.bookingposition',
        ),
    ),
    'zf-rest' => array(
        'Shop\\V1\\Rest\\Address\\Controller' => array(
            'listener' => 'Shop\\V1\\Rest\\Address\\AddressResource',
            'route_name' => 'shop.rest.doctrine.address',
            'route_identifier_name' => 'address_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'address',
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
            'entity_class' => 'Shop\\V1\\Entity\\Address',
            'collection_class' => 'Shop\\V1\\Rest\\Address\\AddressCollection',
            'service_name' => 'Address',
        ),
        'Shop\\V1\\Rest\\Customer\\Controller' => array(
            'listener' => 'Shop\\V1\\Rest\\Customer\\CustomerResource',
            'route_name' => 'shop.rest.doctrine.customer',
            'route_identifier_name' => 'customer_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'customer',
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
            'entity_class' => 'Shop\\V1\\Entity\\Customer',
            'collection_class' => 'Shop\\V1\\Rest\\Customer\\CustomerCollection',
            'service_name' => 'Customer',
        ),
        'Shop\\V1\\Rest\\Product\\Controller' => array(
            'listener' => 'Shop\\V1\\Rest\\Product\\ProductResource',
            'route_name' => 'shop.rest.doctrine.product',
            'route_identifier_name' => 'product_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'product',
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
            'entity_class' => 'Shop\\V1\\Entity\\Product',
            'collection_class' => 'Shop\\V1\\Rest\\Product\\ProductCollection',
            'service_name' => 'Product',
        ),
        'Shop\\V1\\Rest\\Booking\\Controller' => array(
            'listener' => 'Shop\\V1\\Rest\\Booking\\BookingResource',
            'route_name' => 'shop.rest.doctrine.booking',
            'route_identifier_name' => 'booking_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'booking',
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
            'entity_class' => 'Shop\\V1\\Entity\\Booking',
            'collection_class' => 'Shop\\V1\\Rest\\Booking\\BookingCollection',
            'service_name' => 'Booking',
        ),
        'Shop\\V1\\Rest\\Bookingposition\\Controller' => array(
            'listener' => 'Shop\\V1\\Rest\\Bookingposition\\BookingpositionResource',
            'route_name' => 'shop.rest.doctrine.bookingposition',
            'route_identifier_name' => 'bookingposition_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'bookingposition',
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
            'entity_class' => 'Shop\\V1\\Entity\\Bookingposition',
            'collection_class' => 'Shop\\V1\\Rest\\Bookingposition\\BookingpositionCollection',
            'service_name' => 'Bookingposition',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Shop\\V1\\Rest\\Address\\Controller' => 'HalJson',
            'Shop\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'Shop\\V1\\Rest\\Product\\Controller' => 'HalJson',
            'Shop\\V1\\Rest\\Booking\\Controller' => 'HalJson',
            'Shop\\V1\\Rest\\Bookingposition\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'Shop\\V1\\Rest\\Address\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Product\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Booking\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Bookingposition\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'Shop\\V1\\Rest\\Address\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Product\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Booking\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/json',
            ),
            'Shop\\V1\\Rest\\Bookingposition\\Controller' => array(
                0 => 'application/vnd.shop.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Shop\\V1\\Entity\\Address' => array(
                'route_identifier_name' => 'address_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.address',
                'hydrator' => 'Shop\\V1\\Rest\\Address\\AddressHydrator',
            ),
            'Shop\\V1\\Rest\\Address\\AddressCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.address',
                'is_collection' => true,
            ),
            'Shop\\V1\\Entity\\Customer' => array(
                'route_identifier_name' => 'customer_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.customer',
                'hydrator' => 'Shop\\V1\\Rest\\Customer\\CustomerHydrator',
            ),
            'Shop\\V1\\Rest\\Customer\\CustomerCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.customer',
                'is_collection' => true,
            ),
            'Shop\\V1\\Entity\\Product' => array(
                'route_identifier_name' => 'product_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.product',
                'hydrator' => 'Shop\\V1\\Rest\\Product\\ProductHydrator',
            ),
            'Shop\\V1\\Rest\\Product\\ProductCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.product',
                'is_collection' => true,
            ),
            'Shop\\V1\\Entity\\Booking' => array(
                'route_identifier_name' => 'booking_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.booking',
                'hydrator' => 'Shop\\V1\\Rest\\Booking\\BookingHydrator',
            ),
            'Shop\\V1\\Rest\\Booking\\BookingCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.booking',
                'is_collection' => true,
            ),
            'Shop\\V1\\Entity\\Bookingposition' => array(
                'route_identifier_name' => 'bookingposition_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.bookingposition',
                'hydrator' => 'Shop\\V1\\Rest\\Bookingposition\\BookingpositionHydrator',
            ),
            'Shop\\V1\\Rest\\Bookingposition\\BookingpositionCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'shop.rest.doctrine.bookingposition',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'Shop\\V1\\Rest\\Address\\AddressResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Shop\\V1\\Rest\\Address\\AddressHydrator',
            ),
            'Shop\\V1\\Rest\\Customer\\CustomerResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Shop\\V1\\Rest\\Customer\\CustomerHydrator',
            ),
            'Shop\\V1\\Rest\\Product\\ProductResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Shop\\V1\\Rest\\Product\\ProductHydrator',
            ),
            'Shop\\V1\\Rest\\Booking\\BookingResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Shop\\V1\\Rest\\Booking\\BookingHydrator',
            ),
            'Shop\\V1\\Rest\\Bookingposition\\BookingpositionResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Shop\\V1\\Rest\\Bookingposition\\BookingpositionHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'Shop\\V1\\Rest\\Address\\AddressHydrator' => array(
            'entity_class' => 'Shop\\V1\\Entity\\Address',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Shop\\V1\\Rest\\Customer\\CustomerHydrator' => array(
            'entity_class' => 'Shop\\V1\\Entity\\Customer',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Shop\\V1\\Rest\\Product\\ProductHydrator' => array(
            'entity_class' => 'Shop\\V1\\Entity\\Product',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Shop\\V1\\Rest\\Booking\\BookingHydrator' => array(
            'entity_class' => 'Shop\\V1\\Entity\\Booking',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'Shop\\V1\\Rest\\Bookingposition\\BookingpositionHydrator' => array(
            'entity_class' => 'Shop\\V1\\Entity\\Bookingposition',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'Shop\\V1\\Rest\\Address\\Controller' => array(
            'input_filter' => 'Shop\\V1\\Rest\\Address\\Validator',
        ),
        'Shop\\V1\\Rest\\Customer\\Controller' => array(
            'input_filter' => 'Shop\\V1\\Rest\\Customer\\Validator',
        ),
        'Shop\\V1\\Rest\\Product\\Controller' => array(
            'input_filter' => 'Shop\\V1\\Rest\\Product\\Validator',
        ),
        'Shop\\V1\\Rest\\Booking\\Controller' => array(
            'input_filter' => 'Shop\\V1\\Rest\\Booking\\Validator',
        ),
        'Shop\\V1\\Rest\\Bookingposition\\Controller' => array(
            'input_filter' => 'Shop\\V1\\Rest\\Bookingposition\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Shop\\V1\\Rest\\Address\\Validator' => array(
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
                            'max' => 64,
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
                            'max' => 64,
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'street',
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
                            'max' => 64,
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'postcode',
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
                            'max' => 10,
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'city',
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
                            'max' => 64,
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'country',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'Shop\\V1\\Rest\\Customer\\Validator' => array(
            0 => array(
                'name' => 'changed',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'Shop\\V1\\Rest\\Product\\Validator' => array(
            0 => array(
                'name' => 'name',
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
                            'max' => 64,
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'description',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'color',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'price',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'Shop\\V1\\Rest\\Booking\\Validator' => array(
            0 => array(
                'name' => 'date',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'amount',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'Shop\\V1\\Rest\\Bookingposition\\Validator' => array(
            0 => array(
                'name' => 'quantity',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
);
