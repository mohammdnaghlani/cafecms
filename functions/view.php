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
    $validation = validation($params , ['email' => 'required|email' ] , [
        'required' => ':attribute اجباری می باشد',
        'email:email' => ':attribute فرمت رعایت نشده است '
    ]);

    if(!$validation['status']){
        setErrors($validation['errors']->firstOfAll() , 'form');
        setOld($params);
        setMessage('error','this is a test');
        header('location:http://localhost/admin/user/add');
    }
    $params = (object) $params ;
    $addUser = insertUser([
        'email' => $params->email,
        'full_name' => $params->fullname,
        'password' => $params->password,
        'role' => $params->role,
        'mobile' => $params->mobile,
        'confirmed' => 1
    ]);
    if($addUser > 0){
        setMessage('success','add User !');
        header('location:http://localhost/admin/user/add');
    }
 
}
