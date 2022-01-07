<?php

function setOld(array|object $data):void
{
    if(!isset($_SESSION['oldData'])){
        $_SESSION['oldData'] = [] ;
    }
    $_SESSION['oldData']= $data ;
}

function getOld(string $key) : bool|string
{
    if(!isset($_SESSION['oldData'][$key])){
        return false ;
    }

    $getOld = $_SESSION['oldData'][$key];
    unset($_SESSION['oldData'][$key]);
    return $getOld ;
}