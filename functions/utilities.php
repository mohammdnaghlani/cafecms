<?php

function setErrors(array $arr)
{
    setOldData($arr['params']);
    setFormError($arr['errors']);
    setFlashMessage($arr['message']['type'] , $arr['message']['key']) ;
    header('location:' .$arr['url'] );
    exit();
}

