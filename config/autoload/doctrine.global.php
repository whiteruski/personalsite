<?php

return array(
    // ...
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => $_SERVER['RDS_HOSTNAME'],
                    'port'     => $_SERVER['RDS_PORT'],
                    'user'     => $_SERVER['RDS_USERNAME'],
                    'password' => $_SERVER['RDS_PASSWORD'],
                    'dbname'   => $_SERVER['RDS_DB_NAME'],
                )
            )
        )
    ),
);