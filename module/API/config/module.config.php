<?php

namespace API;

return array(
    'controllers' => array(
        'invokables' => array(
            'Skill' => 'API\Controller\SkillController',
            'Language' => 'API\Controller\LanguageController',
            'Hobby' => 'API\Controller\HobbyController',
        ),
    ),

    'router' => array(
        'routes' => array(

            'api' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/api/[:controller][/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Skill',
                    ),
                ),
            ),

        ), // routes
    ),

    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',

        'strategies' => array(
            'ViewJsonStrategy'
        )
    ),


    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ),

    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);