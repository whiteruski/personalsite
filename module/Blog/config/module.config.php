<?php
// Filename: /module/Blog/config/module.config.php

return array(
    'router' => array(
        'routes' => array(

            'blog' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/blog',
                    'defaults' => array(
                        'controller' => 'Blog\Controller\List',
                        'action'     => 'index',
                    )
                )
            )

        )
    )
);