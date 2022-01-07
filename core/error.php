<?php

function setErrors(array|object $errors , $parentKey) : void
{
    if(!isset($_SESSION['errors'])){
        $_SESSION['errors'] = [] ;
    }
    $_SESSION['errors'][ $parentKey ] = $errors ;
}

function getErrorByKey(string $key , string $parentKey) : string|bool
{
    if(!isset($_SESSION['errors'][$parentKey][$key])){
        return false ;
    }
    $getError = $_SESSION['errors'][$parentKey][$key];
    $unset =  getCleanSessionError($key , $parentKey) ;
    return $getError ;    
}

function getCleanSessionError(string $key , string $parentKey)
{
      unset($_SESSION['errors'][$parentKey][$key]);
}