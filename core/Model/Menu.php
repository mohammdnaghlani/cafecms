<?php

function getMenus(array|string $columns = '*') : array
{
    $connect = connect();

    $menus = $connect->select('menus' , $columns);

    return $menus ;
}
function getParentMenus(array|string $columns = '*') : array
{
    $connect = connect();

    $menus = $connect->select('menus' , $columns , ['parent_id' => 0 ]);

    return $menus ;
}