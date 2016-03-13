<?php

namespace ZfcUserList\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator;
use ZfcUser\Mapper\UserInterface;
use ZfcUser\Options\ModuleOptions as ZfcUserModuleOptions;
use ZfcUserList\Options\ModuleOptions;

class UserListController extends AbstractActionController
{
    protected $options;
    protected $userMapper;

    public function __construct(ModuleOptions $options, UserInterface $userMapper)
    {
        $this->setOptions($options);
        $this->setUserMapper($userMapper);
    }

    public function listAction()
    {
        $users = $this->userMapper->findAll();
        if (is_array($users)) {
            $paginator = new Paginator\Paginator(new Paginator\Adapter\ArrayAdapter($users));
        } else {
            $paginator = $users;
        }

        $paginator->setItemCountPerPage($this->options->getElementsPerPage());
        $paginator->setCurrentPageNumber($this->getEvent()->getRouteMatch()->getParam('p'));
        return array(
            'users' => $paginator,
            'userlistElements' => $this->options->getUserListElements()
        );
    }

    public function setOptions(ModuleOptions $options)
    {
        $this->options = $options;
        return $this;
    }

    public function setUserMapper(UserInterface $userMapper)
    {
        $this->userMapper = $userMapper;
        return $this;
    }
}
