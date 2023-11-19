<div class="main-content">
                <script>
                    $(document).ready(function(){
                        $("#getUID").load("UIDContainer.php");
                        setInterval(function() {
                            $("#getUID").load("UIDContainer.php");
                        }, 500);
                    });
                </script>
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
                                <li><a href="index.html">Home</a></li>
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
                                <a class="dropdown-item" href="<?php echo $web_root ?>/logout.php">Log Out</a>
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
       

                                <form method="POST" action="#">

                                    <div class="form-group row">
                                        
                                        <div class="col-sm-10">
                                            <div class="off_device">
                                            <img style="border-radius: 50px" src="<?php echo $web_root ?>/images/gif/off_device.gif" width="100px" heigh="100px">
                                            </div>
                                            
                                            <div class="on_device">
                                            <img style="border-radius: 50px" src="<?php echo $web_root ?>/images/gif/on_new.gif" width="80px" heigh="80px">
                                            </div>
                                        </div>
                                    </div>

                                    <textarea name="id" hidden id="getUID" rows="1" cols="10" required></textarea>
                                    <input type="text"  id="value1">
                                

                                    <div class="row">
                                        <label class="col-sm-8"></label>
                                        <div class="col-sm-8">
                                            <button name="send_datas" type="submit" id="check_device" class="btn btn-primary btn-sm m-b-0">Check Status</button>
                                            <button name="stop_device" type="submit" id="stop_device" class="btn btn-outline-primary btn-sm m-b-0">Stop Device</button>
                                            <button name="resume" type="submit" id="resume" class="btn btn-outline-primary btn-sm m-b-0">Resume</button>
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
        <script>
        $( window ).on( "load", function() {
            var txt = $("#getUID").val(); 
        $("#value1").val(txt);

        // let value2=$("#value1").val(); 

        if($("#value1").val()!="00.000000-0.000000"){

            alert("Device available");

            setInterval(function() {
                $(".off_device").hide();
                $(".on_device").show();
                $("#resume").setProp("disabled");
            }, 100);

        } else {
            alert("Device Offline");

            setInterval(function() {

            $(".off_device").show();
            $(".on_device").hide();

        }, 100);
          
        }

    
        // let result1 = txt.slice(0, 9);
        // let result2 = txt.slice(9, 19);
        // $("#longitude").val(result1);
        // $("#latitude").val(result2);
    });
    </script>