<?php

function setErrors(array $arr)
{
    setOldData($arr['params']);
    setFormError($arr['errors']);
    setFlashMessage($arr['message']['type'] , $arr['message']['key']) ;
    header('location:' .$arr['url'] );
    exit();
}

function getRole(int $role) : string
{
    $roles = [
        1 => 'کاربر',
        2 => 'مدیر'
    ];
    return $roles[$role];
}
function getStatus(int $status) : string
{
    $situation = [
        0 => 'غیر قعال',
        1 => 'فعال'
    ];
    return $situation[$status];
}