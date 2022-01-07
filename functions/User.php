<?php

function insertUser(array $data)
{
    $connect = connect();

    $addUser = $connect->insert('users' , $data);
    var_dump($data);
    if($connect->id()){
        return $connect->id();
    }
    return false ;
}