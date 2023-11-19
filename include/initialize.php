<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'smart_nyereka');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');



//load the database configuration first.
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."assigned_permissions.php");
require_once(LIB_PATH.DS."sessions.php");
require_once(LIB_PATH.DS."groups.php");
require_once(LIB_PATH.DS."permissions.php");
require_once(LIB_PATH.DS."users.php");


//mydb configurations


?>