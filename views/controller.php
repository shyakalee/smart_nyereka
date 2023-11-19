<?php
require_once ("../include/initialize.php");

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {

    case 'insert';
      register_user();    
        break;

        case 'save_group';
          save_group();
          break;

          case 'delete_user';
          delete_user();
          break;

          case 'restore_user';
          restore_user();
          break;
          
          case 'assign_perrmission';
          approve_permissions();
          break;

                case 'test_id';
                return_id();
                break;

        default:
        //echo '404';
        redirect(web_root."index.php");
}


function approve_permissions() 
  {    
    if(isset($_POST['assign_now'])) 
    {
      global $mydb;

      $all_perms= new Assigned_permissions();      
      $selections=$_POST['checkItems'];

      for($i=0; $i < count($selections); $i++)
       {
         $group=$_POST['group_id'];       
      
        $sql= "INSERT INTO tbl_group_permissions(id_group, id_permission) VALUES ('$group' ,'$selections[$i]')";
	      $mydb->setQuery($sql);	
	      $mydb->executeQuery();   
        redirect(web_root."index.php?route=assign_permission");
        
      // foreach($_POST['checkItems'] as $key=>$selections) {
      //   print_r($selections[0]);        
      // }
    }
  } else {
    echo "<script>alert('Please check something..')</script>";
  }
}

function register_user()
{
  if(isset($_POST['send_datas']))
    {
      if (!empty($_POST['firstname'])&& !empty($_POST['group_val']) ) {
        $user=new User();
        $user->id         = "";
        $user->first_name = $_POST['firstname'];
        $user->last_name = $_POST['lastname'];
        $user->address   = $_POST['address'];
        $user->tel_number   = $_POST['telephone'];
        $user->user_type   = $_POST['group_val'];
        $user->username   = $_POST['username'];
        $user->password   = "00000";
        $user->is_active   = "1";
        $user->last_update   = date("Y-m-d h:i:sa");
        $user->created_at   = date("Y-m-d h:i:sa");
        $user->create();
        redirect(web_root."index.php?route=users_list");
        } else {
        // return false;
          redirect(web_root."index.php?route=user_register");
        }      
    } 
	}

  function save_group() 
  {
    $group=new Group();
    $group->id          = "";
    $group->title       =   $_POST['group_title'];
    $group->description =   $_POST['group_desc'];
    $group->create();
    redirect(web_root."index.php?route=add_group");
  }

  function new_permission() 
  {
    if(isset($_POST['save_permission']))
    {
    $permission=new Permission();
    $permission_name = preg_replace('/\s+/', '_', $_POST['permission_name']);
    $permission->id   =   "";
    $permission->permission_name = $permission_name;
    $permission->description = $_POST['description'];
    $permission->operations = $permission_name;
    $permission->create();
    redirect(web_root."index.php?route=add_permission");
  }

}

function update_info() {
  if(isset($_POST['send_datas']))
  {
    if (!empty($_POST['firstname'])&& !empty($_POST['group_val']) ) {
      $user=new User();
      $user->first_name = $_POST['firstname'];
      $user->last_name = $_POST['lastname'];
      $user->address   = $_POST['address'];
      $user->tel_number   = $_POST['telephone'];
      $user->user_type   = $_POST['group_val'];
      $user->username   = $_POST['username'];
      $user->last_update   = date("Y-m-d h:i:sa");
      $user->update($_POST['user_id']);
      redirect(web_root."index.php?route=users_list");
      } else {
      // return false;
        redirect(web_root."index.php?route=user_register");
      }      
  } 
}


function delete_user() {
    $user=new User();
    $user->is_active = "0";
    $user->last_update   = date("Y-m-d h:i:sa");
    $user->update($_GET['hashkey']);
    redirect(web_root."index.php?route=users_list");
}

function restore_user() {
  $user=new User();
  $user->is_active = "1";
  $user->last_update   = date("Y-m-d h:i:sa");
  $user->update($_GET['hashkey']);
  redirect(web_root."index.php?route=users_list");
}

function return_id($id) 
{
  $user=new User();
  $disp=$user->pass_id($id);
  print_r($disp);
  // echo "<script>alert($disp) </script>";
  return $disp;
}
