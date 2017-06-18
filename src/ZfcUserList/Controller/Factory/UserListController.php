<?php
namespace ZfcUserList\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcUserList\Controller\UserListController as controller;
use Interop\Container\ContainerInterface;

class UserListController implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        return $this->__invoke($sm, "UserListController");
    }


    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $controller = new controller(
            $container->get("zfcuserlist_module_options"),
            $container->get("zfcuser_user_mapper")
        );
        return $controller;
    }
}
