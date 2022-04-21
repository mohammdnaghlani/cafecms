<?php
try{

  require_once '../bootstrap/init.php';

  $tpage = null ;
  var_dump(PaginationWithMysql(3, $tpage)) ;

  die() ;
  runApp() ;


}catch(Exception $error){

    echo $error->getMessage() ;

}
