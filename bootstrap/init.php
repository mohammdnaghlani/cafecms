<?php
session_start() ;
define('BASE_PATH' , dirname(__DIR__). DIRECTORY_SEPARATOR) ;
require_once '../functions/func_globals.php';
require_once createPath('vendor.autoload') ;
require_once createPath('functions.env');
require_once createPath('core.router');
require_once createPath('core.view');
require_once createPath('core.CSRF');
require_once createPath('core.database');
require_once createPath('functions.view');