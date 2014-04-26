<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
            'zfcuserlist' => __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'zfcuserlist' => 'ZfcUserAdmin\Controller\UserListController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'zfcuser' => [
                'child_routes' => [
                    'zfcuserlist' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/list',
                            'defaults' => [
                                'controller' => 'zfcuserlist',
                                'action' => 'list'
                            ]
                        ]
                    ],
                ],
            ],
        ),
    ),
);
