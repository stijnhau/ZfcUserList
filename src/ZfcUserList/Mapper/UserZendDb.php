<?php

namespace ZfcUserList\Mapper;

use ZfcUser\Mapper\User as ZfcUserMapper;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Paginator;

class UserZendDb extends ZfcUserMapper
{
    public function findAll()
    {
        $select = $this->getSelect($this->tableName);
        $select->order(array('username ASC', 'display_name ASC', 'email ASC'));
        //$resultSet = $this->select($select);

        $resultSet = new HydratingResultSet($this->getHydrator(), $this->getEntityPrototype());
        $adapter = new Paginator\Adapter\DbSelect($select, $this->getSlaveSql(), $resultSet);
        $paginator = new Paginator\Paginator($adapter);

        return $paginator;
    }
}
