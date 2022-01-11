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