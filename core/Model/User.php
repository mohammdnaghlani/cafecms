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