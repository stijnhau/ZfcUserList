<?php
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcUser\Mapper\UserHydrator;
use ZfcUserList\Options;

return array(
    'invokables' => array(
        'zfcuserlist_user_service' => 'ZfcUserList\Service\User',
    ),
    'factories' => array(
        'zfcuserlist_module_options' => function (ServiceLocatorInterface $sm) {
            $config = $sm->get('Config');
            return new Options\ModuleOptions(isset($config['zfcuserlist']) ? $config['zfcuserlist'] : array());
        },
        'zfcuser_user_mapper' => function (ServiceLocatorInterface $sm) {
            /** @var $config \ZfcUserlist\Options\ModuleOptions */
            $config = $sm->get('zfcuserlist_module_options');
            $mapperClass = $config->getUserMapper();
            if (stripos($mapperClass, 'doctrine') !== false) {
                $mapper = new $mapperClass(
                    $sm->get('zfcuser_doctrine_em'),
                    $sm->get('zfcuser_module_options')
                );
            } else {
                /** @var $zfcUserOptions \ZfcUser\Options\UserServiceOptionsInterface */
                $zfcUserOptions = $sm->get('zfcuser_module_options');

                /** @var $mapper \ZfcUserlist\Mapper\UserZendDb */
                $mapper = new $mapperClass();
                $mapper->setDbAdapter($sm->get('zfcuser_zend_db_adapter'));
                $entityClass = $zfcUserOptions->getUserEntityClass();
                $mapper->setEntityPrototype(new $entityClass);
                $mapper->setHydrator(new UserHydrator());
            }

            return $mapper;
        },
    ),
);