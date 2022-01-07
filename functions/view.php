<?php

function forntIndex($params)
{
    return loadFront('index' , $params  ) ;
}

function AdminIndex($params)
{
    return loadAdmin('index' , $params ,'admin-layout' ) ;
}

function adminAddUser($params)
{
    return loadAdmin('user.add' , $params ,'admin-layout' ) ;
}

function adminSaveUser($params)
{
    $validation = validation($params , ['email' => 'required']);
    if(is_array($validation)){
        setFlashMessage('error' , 'createUserError') ;
        header('location:http://localhost/admin/user/add');
    }

    // create User ;
    
}
