<?php

<<<<<<< HEAD
function checkFlashMessage()
=======
function checkFlashMessageExists()
>>>>>>> master
{
    if(!isset($_SESSION['flashMessage'])){
        $_SESSION['flashMessage'] = [] ;
    }
<<<<<<< HEAD
    return  $_SESSION['flashMessage'];
=======
    return $_SESSION['flashMessage'] ;
>>>>>>> master
}

function clearMessage()
{
<<<<<<< HEAD
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
=======
    return $_SESSION['flashMessage'] = [] ;
}

function setFlashMessage(string $type , string $message) 
{
    return $_SESSION['flashMessage'] = array(
        'type' => $type ,
        'body' => $message ,
    );
}
function showFlashMessage()
{
    if(!empty(checkFlashMessageExists())) :
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
                        title: "<?=getMessage($_SESSION['flashMessage']['type'])?>",
                        text: "<?=getMessage($_SESSION['flashMessage']['body'])?>",
                        icon: "<?=($_SESSION['flashMessage']['type'])?>",
                        button: 'قبول', 
                        timer:4000,					  
                    });
            </script>
        <?php
            clearMessage() ;
        endif ;  
>>>>>>> master
}
