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
function getAllUsers($columns = '*') : array|object
{
    $connect = connect();
    $allUsers = $connect->select('users', $columns );
    return $allUsers ;
}
function deleteUserById(int $uid) : bool
{
    $connect = connect();
    $delete = $connect->delete('users', ['uid' => $uid] );
    return $delete->rowCount() ;
}

function updateUserById(array $data , int $uid ) : bool
{
    $connect = connect();
    $update = $connect->update('users', $data , ['uid' => $uid] );
    return $update->rowCount() ;
}