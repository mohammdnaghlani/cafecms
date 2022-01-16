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
        $arr = [
            'params' => $params,
            'errors' => $validation['errors'],
            'message' => ['type' => 'error' , 'key' => 'createUserError'],
            'url' => 'http://localhost/admin/user/add'
        ];
        setErrors($arr);
    }
    $params = (object) $params ;

    $data = array(
        'email' => $params->email  ,
        'password' => $params->password,
        'full_name' => $params->fullname,
        'mobile' => $params->mobile,
        'role' => $params->role,
        'confirmed' => 1,
    );

    $newUser = newUser($data) ;
    if($newUser > 0){
        setFlashMessage('success' , 'success') ;
        redirect('admin/user/add');
    }
    
}

function listUserAdmin($params)
{
    $params['users'] = getUsers(['uid','email','full_name','role','confirmed']) ;
    return loadAdmin('user.list' , $params ,'admin-layout' ) ;
}
function acceptUserByid($params)
{
    $confirmed = confirmedUserBuId($params['userId']) ;
    if($confirmed){
        setFlashMessage('success' , 'success') ;
    }else{
        setFlashMessage('error' , 'success') ;
    }  
    redirect() ;

}


function removeUser($params)
{
    $remove = removeUserById($params['user_id']) ;
    if($remove){
        setFlashMessage('success' , 'success') ;
    }else{
        setFlashMessage('error' , 'success') ;
    }
  
    redirect() ;
}
































