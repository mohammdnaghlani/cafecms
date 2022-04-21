<?php
function createPath(string $file_name , string $extention = 'php') : string
{
    //dir.file
    $file_path = str_replace('.' , DIRECTORY_SEPARATOR , $file_name);
    //dir/file
    $file_path = $file_path .'.'.$extention;
    //dir/file.php
    $file_path = BASE_PATH . $file_path ;
    //c:/xampp/htdoc/cafecms/dir/file.php
    if(!file_exists( $file_path)){
        throw new Exception('file not found !' . $file_name) ;
    }
    return $file_path ;
}


function getAssets(string $file_name) : string
{
    return get__env('BASE_URI') . $file_name ;
}

function getAdminAssets($file_name) : string
{
    return getAssets(get__env('ADMIN_ASSETS_PATH') . $file_name) ;
}
function getFrontAssets(string $file_name) : string
{
    return getAssets(get__env('FRONT_ASSETS_PATH') . $file_name) ; 
}


function getUriByAliensName(string $aliens_Name) : string
{
  $getRouteByAliensName = trim(aliensRoute($aliens_Name) , '/');

  return get__env('BASE_URI') . $getRouteByAliensName ;
}

function getConfig(string $config_name) : mixed
{
    $config = include createPath('config.' . $config_name) ;
    return $config ;
}


function pagination(array $array , $page , &$totalPage) : array
{
    $countItems = count($array);
    $totalPage = ceil($countItems / get__env('VIEW_PER_PAGE'));
    $totalItem = ($page - 1 ) * get__env('VIEW_PER_PAGE') ;
    $view = array_splice($array , $totalItem , get__env('VIEW_PER_PAGE'));
    return $view;
}

function PaginationWithMysql($page , &$totlaPage ) : array | Object
{
    $getAllRows = connect()->count('users');
    $totlaPage = ceil($getAllRows)  / get__env('VIEW_PER_PAGE') ;
    $totalItem = ($page - 1)  * get__env('VIEW_PER_PAGE') ; 
    echo $totalItem . '<hr>' ;
    $users = connect()->select('users' , '*' , ["LIMIT" => [$totalItem , get__env('VIEW_PER_PAGE')]] );
    return $users ;
}