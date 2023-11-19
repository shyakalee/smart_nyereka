<?php
$users= new User();
$details=$users->single_user($_GET['hashkey']);
?>
<div class="main-content">
            <!-- header area start -->
            <?php include "views/toolbars/topbar.php";?>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Home</a></li>
                                <li><span><?php echo $title; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="<?php echo $web_root?>logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-8">
                        
                        <div class="pcoded-inner-content">
                            <div class="main-body">
       

                                <form method="POST" action="<?php echo $web_root ?>views/controller.php?action=update_info">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">First name</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="firstname" class="form-control form-control-round" value="<?php echo $details->first_name ?>" placeholder="Please fill firstname information">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Last name</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="lastname" class="form-control form-control-round" value="<?php echo $details->last_name ?>" placeholder="Please fill lastname information">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="username" class="form-control form-control-round" value="<?php echo $details->username ?>" placeholder="Please fill username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="address" class="form-control form-control-round" value="<?php echo $details->address ?>" placeholder="Please fill username">
                                        </div><input type="text" name="user_id" hidden value="<?php echo $details->id ?>">
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="telephone" class="form-control form-control-round" value="<?php echo $details->tel_number ?>" placeholder="Please fill username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Access Group</label>
                                        <div class="col-sm-10">                                   

                                            <select name="group_val"  class="form-control">  
                                                                    
                                                <option value="administrator">Administrator</option>
                                                <option value="ag_system">Ag System</option> 
                                                                                        
                                            </select>
                                            
                                        </div>
                                    </div>


                                    <div class="row">
                                        <label class="col-sm-8"></label>
                                        <div class="col-sm-8">
                                            <button name="send_datas" type="submit" class="btn btn-primary btn-sm m-b-0">Update User</button>

                                            <a href="index.php?route=users_list" class="btn btn-primary btn-sm m-b-0">Go back</a>
                                        </div>                                                                                                          
                                    </div>
                                </form>
      
                            </div>

                            <div id="styleSelector">
                            </div>
                            </div>
                        
                    </div>
                    <!-- seo fact area end -->

                </div>
            </div>
        </div>