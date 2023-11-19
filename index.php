<?php

require_once ("include/initialize.php");

$user = new User();
@$result=$user::checkAuthentication($_SESSION['username']);
if(!$result) {
    redirect(web_root.'login.php?login=true');
}

$contents='home.php';
$view = (isset($_GET['route']) && $_GET['route'] != '') ? $_GET['route'] : '';


switch ($view) {
 
	case 'home' :
        $title="Dashboard";	
		$contents='views/home.php';		
		break;

        case 'getGeodevice' :
            $title="Get Device Location";	
            $contents='views/map_test.php';		
            break;

            case 'remoteCmd' :
                $title="Remote Command";	
                $contents='views/remote_command.php';		
                break;

                case 'users' :
                    $title="New User";	
                    $contents='views/user_register.php';		
                    break;

                    case 'users_list' :
                        $title="Manage Users";	
                        $contents='views/users_list.php';		
                        break;

                        case 'remoteCmd' :
                            $title="Remote Command";	
                            $contents='views/remote_command.php';		
                            break;

                            case 'edit_info';
                            $title="Edit User Profile";	
                            $contents='views/user_profile.php';	
                            break;
            
 	
	default :
        $title="Dashboard";		
		$contents='views/home.php';			

}

require_once("views/templates.php");

?>