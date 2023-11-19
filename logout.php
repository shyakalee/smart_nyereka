<?php
require_once ("include/initialize.php");

// 1. Find the session
@session_start();


unset( $_SESSION['id'] );
unset( $_SESSION['full_names'] );
unset( $_SESSION['id_group'] );
unset( $_SESSION['username'] );

//session_destroy();

redirect(web_root."login.php?logout=1");

?>