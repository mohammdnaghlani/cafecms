<?php

function validation(array $params ,array $validation_rule , array|null $messages = null) : array|bool
{
   
    $validator = new \Rakit\Validation\Validator;
   
     $validation = $validator->make($params , $validation_rule);

    if(!is_null($messages)){
        $validation->setMessages($messages);
    }
    $validation->validate() ;

    if(!empty($validation->errors()->all())){
        return $validation->errors()->all();
    }
    return true ;
}
