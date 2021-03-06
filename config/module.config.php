<?php
namespace ZfcUserList;

use Zend\Router\Http\Segment;

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            'zfcuserlist' => __DIR__ . '/../view',
        ),
    ),
    'router' => array(
        'routes' => array(
            'zfcuser' => [
                'child_routes' => [
                    'zfcuserlist' => [
                        'type' => Segment::class,
                        'options' => [
                            'route' => '/list[/:p]',
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
