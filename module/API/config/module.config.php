<?php

namespace API;

return array(
    'controllers' => array(
        'invokables' => array(
            'Skill' => 'API/Controller/SkillController',
        ),
    ),

    'router' => array(
        'routes' => array(

            'api' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/api/Skill[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'API\Controller\SkillController',
                    ),
                ),
            ),


        ), // routes
    ),

    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
//        'template_path_stack' => array(
//            'api' => __DIR__ . '/../view',
//        ),
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