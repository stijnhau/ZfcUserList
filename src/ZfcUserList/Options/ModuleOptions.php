<?php

namespace ZfcUserList\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions implements
    UserListOptionsInterface
{
    /**
     * Turn off strict options mode
     */
    protected $__strictMode__ = false;

    /**
     * Array of data to show in the user list
     * Key = Label in the list
     * Value = entity property(expecting a 'getProperty())
     */
    protected $userListElements = array('Id' => 'id', 'Email address' => 'email');

    protected $elementsPerPage = 10;

    protected $userMapper = 'ZfcUserList\Mapper\UserDoctrine';

    public function setUserMapper($userMapper)
    {
        $this->userMapper = $userMapper;
    }

    public function getUserMapper()
    {
        return $this->userMapper;
    }

    public function setUserListElements(array $listElements)
    {
        $this->userListElements = $listElements;
    }

    public function getUserListElements()
    {
        return $this->userListElements;
    }

    public function setElementsPerPage($elementsPerPage)
    {
        $this->elementsPerPage = $elementsPerPage;
    }

    public function getElementsPerPage()
    {
        return $this->elementsPerPage;
    }
}
