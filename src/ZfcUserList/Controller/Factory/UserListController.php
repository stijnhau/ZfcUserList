<?php
namespace ZfcUserList\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcUserList\Controller\UserListController;

class UserListController implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm)
    {
        $parentLocator = $sm->getServiceLocator();

        $controller = new UserListController(
            $parentLocator->get("zfcuserlist_module_options"),
            $parentLocator->get("zfcuser_user_mapper")
        );
        return $controller;
    }
}
