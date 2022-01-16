<?php

return array(
    '/' => array(
        'page' => 'forntIndex',
        'method' => 'get',
        'aliensName' => 'frontIndex'
    ),
    '/admin' => array(
        'page' => 'adminIndex',
        'method' => 'get',
        'aliensName' => 'AdminIndex'
    ),
    '/admin/user/add' => array(
        'page' => 'adminAddUser',
        'method' => 'get',
        'aliensName' => 'createUserAdmin'
    ),
    '/admin/user/save' => array(
        'page' => 'adminSaveUser',
        'method' => 'post',
        'aliensName' => 'saveUserAdmin'
    ),
    '/admin/user/list' => array(
        'page' => 'listUserAdmin',
        'method' => 'get',
        'aliensName' => 'listUserAdmin'
    ),
    '/admin/user/confirme' => array(
        'page' => 'acceptUserByid',
        'method' => 'get',
        'aliensName' => 'confirmeUser'
    ),
    '/admin/user/remove' => array(
        'page' => 'removeUser',
        'method' => 'post',
        'aliensName' => 'removeUser'
    ),

);
