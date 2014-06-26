<?php
/**
 * ZfcUserList Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = array(
    /**
     * Mapper for ZfcUser
     *
     * Set the mapper to be used here
     * Currently Available mappers
     *
     * ZfcUserList\Mapper\UserDoctrine
     *
     * By default this is using
     * ZfcUserList\Mapper\UserZendDb
     */
    'user_mapper' => 'ZfcUserList\Mapper\UserZendDb',

    /**
     * an array with as first the label and as second the fielsname in the database
     */
    'userListElements' => array('Id' => 'id', 'Email address' => 'email', 'Display name' => 'display_name')

    /**
     * The amount of elements(users) shown per page.
     */
    'elementsPerPage' => '10',


    /**
     * [WIP]
     */
    'orderBy' => 'username',
);

/**
 * You do not need to edit below this line
 */
return array(
    'zfcuserlist' => $settings
);
