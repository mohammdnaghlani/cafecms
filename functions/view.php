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
    $validation = validation(
            $params ,
            ['email' => 'required' ,'fullname' => 'required'],
            [
                'required' => 'این فیلد اجباری می باشد !' ,
                // 'fullname:required' => ' انام و نام خانوادگی اجباری می باشد' ,
            ]
        );
    

    if(!$validation['status']){
       
        setFormError($validation['errors']);
        setFlashMessage('error' , 'createUserError') ;
        header('location:http://localhost/admin/user/add');
    }

    // create User ;
    
}
