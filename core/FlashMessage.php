<?php

function checkFlashMessage()
{
    if(!isset($_SESSION['flashMessage'])){
        $_SESSION['flashMessage'] = [] ;
    }
    return  $_SESSION['flashMessage'];
}

function clearMessage()
{
   return  $_SESSION['flashMessage'] = [] ; 
}

function setMessage(string $type , $message)
{
    return  $_SESSION['flashMessage'] = [
        'type' => $type ,
        'body' => $message,
    ];    
}
function showFlashMessage()
{
    if(!empty(checkFlashMessage())) :
    ?>
        <style>
            .swal-button-container{
            float: left;
            margin: 10px;
            }
        </style>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                    title: "<?=($_SESSION['flashMessage']['type'])?>",
                    text: "<?=($_SESSION['flashMessage']['body'])?>",
                    icon: "<?=($_SESSION['flashMessage']['type'])?>",
                    button: 'قبول', 
                    timer:3000,					  
                });
        </script>
    <?php
        clearMessage() ;
    endif ;
}
