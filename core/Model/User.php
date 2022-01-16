<?php

function newUser(array|object $data) : bool|int
{
    $connect = connect();

    $newUser = $connect->insert('users' , $data);
    if($connect->id() > 0 ){
        return $connect->id() ;
    }
    return false ;
}
function getUsers(array|string $columns = '*') : array
{
    $connect = connect();

    $allUsers = $connect->select('users' , $columns);

    return $allUsers ;
}

function confirmedUserBuId(int $user_id) : bool
{
    $connect = connect();
    $update = $connect->update('users' , ['confirmed' => 1] , ['uid' => $user_id]);
    if($update->rowCount() > 0){
        return true ;
    }
    return false ;
}

function removeUserById(int $user_id) : bool
{
    $connect = connect();
    $remove = $connect->delete('users' , ['uid' => $user_id]);
    if($remove->rowCount() > 0){
        return true ;
    }
    return false ; 
}








function getRole(int $role) : string
{
    $roles = array(
        1 => 'کاربر' ,
        2 => 'مدیر'
    );

    return $roles[$role] ;
}

function userStatus(int $status) : string
{
    $situation = array(
        0 => 'غیر فعال' ,
        1 => 'فعال'
    );

    return $situation[$status] ; 
}

