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

                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Users List</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Names</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">Last Update</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $string="SELECT * FROM tbl_users";
                                            $mydb->setQuery($string);
                                                    $cur = $mydb->loadResultList();
                                                    foreach ($cur as $result) { 
                                            ?>      
                                                <tr>
                                                    <th scope="row"><?php echo $result->id ?></th>
                                                    <td><?php echo $result->first_name ." ". $result->last_name ?></td>
                                                    <td><?php echo $result->username ?></td>
                                                    <td><?php echo $result->address ?></td>
                                                    <td><?php echo $result->user_type ?></td>
                                                    <td>
                                                    <?php if($result->is_active == "1") {?> <span class="status-p bg-primary">Active</span> <?php } else { ?><span class="status-p bg-danger">Disabled</span> <?php } ?>
                                                    </td>
                                                    <td><?php echo $result->last_update ?></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">                                                            
                                                            <li class="mr-3"><a href="<?php echo $web_root ?>index.php?route=edit_info&hashkey=<?php echo $result->id ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li class="mr-3"><a href="<?php echo $web_root ?>views/controller.php?action=pwd_reset&hashkey=<?php echo $result->id ?>" class="text-secondary"><i class="fa fa-key" onclick="return confirm('Reset password Info ensure it will reset to: 0000?')"></i></a></li>
                                                            <?php if ($result->is_active =="1") {?>
                                                            <li><a href="<?php echo $web_root ?>views/controller.php?action=delete_user&hashkey=<?php echo $result->id ?>" class="text-danger"><i class="ti-trash" onclick="return confirm('Delete this User??')"></i></a></li>
                                                            <?php } else {?>
                                                                <li><a href="<?php echo $web_root ?>views/controller.php?action=restore_user&hashkey=<?php echo $result->id ?>" class="text-danger"><i class="fa fa-rotate-left" onclick="return confirm('Restore this User??')"></i></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php } ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                    
                    <!-- seo fact area end -->

                </div>
            </div>
        </div>