<div class="page-wrapper">
    <div class="page-body">

        <div class="row">

            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Manage users</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                <li><i class="feather icon-trash close-card"></i></li>
                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>#Record</th>
                                        <th>Full Names</th>
                                        <th>email</th>
                                        <th>Group</th>
                                        <th>Username</th>
                                        <th>Rating</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   <?php
                                   $count=0;
                                   $mydb->setQuery("SELECT tbl_admin.*, tbl_groups.* 
                                   from tbl_admin inner JOIN tbl_groups on tbl_admin.id_group=tbl_groups.id");
                                     $cur = $mydb->loadResultList();
                                     foreach ($cur as $result) {
                                   ?>
                                    <tr>
                                        <td><?php echo htmlentities($count += 1) ?></td>
                                        <td><?php echo htmlentities($result->full_names); ?></td>
                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3d3a3d1e39333f3732703d3133">[email&#160;protected]</a></td>
                                        <td><label class="label label-success"><?php echo htmlentities($result->title)?></label></td>
                                        <td><a href="#" class="#"><?php echo htmlentities($result->username)?></a></td>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                        </td>
                                        <td>
                                        <a href="#" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>      
            
            <div class="col-xl-12">
                <div class="card proj-progress-card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <h6>Published Project</h6>
                                <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>Completed Task</h6>
                                <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>Successfull Task</h6>
                                <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>Ongoing Project</h6>
                                <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      
        </div>

    </div>
</div>
