<?php
$group= new Group();
$details=$group->single_group($_GET['session']);
//echo print_r($details);
?>
<div class="col-sm-12">
<div class="card">
        <div class="card-header">
            <h5 style="color:green"><?php echo $details->title; ?> 's Permission Group</h5>
            <span>Add class of <code>.form-control</code> with
                <code>&lt;input&gt;</code> tag</span>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-group row">

                        <div class="col-sm-10">
                            <form method="POST" action="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="card">
        <div class="card-header">
            <h5>Permissions Assign</h5>
            <span>Add class of <code>.form-control</code> with
                <code>&lt;input&gt;</code> tag</span>
        </div>
        <div class="card-block">
            <form method="POST" action="<?php echo $web_root ?>views/controller.php?action=assign_perrmission">            
                <div class="row">
                    <?php
                    $string = "SELECT * FROM tbl_permissions";
                    $mydb->setQuery($string);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                    ?>
                        <div class="col-sm-3 col-xl-3 m-b-4">
                            <!-- <h4 class="sub-title">Section</h4> -->
                            <div class="border-checkbox-section">
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input type="checkbox" 
                                    <?php
                                    $all=array('1','2','5','8','13','20');
                                   // $string = "SELECT * FROM tbl_group_permissions; where id_group=`1`";
                                   // $mydb->setQuery($string);
                                   // $cur = $mydb->loadResultList();
                                    

                                    if(in_array($result->id,$all)) {
                                        print('checked');
                                    }
                                    ?>
                                    
                                    id="checkbox<?php echo $result->id ?>" class="border-checkbox" name="checkItems[]" value="<?php echo $result->id ?>">
                                    <label class="border-checkbox-label" for="checkbox<?php echo $result->id ?>"><?php echo $result->description ?></label>
                                </div>
                            </div>                            
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <label class="col-sm-10"></label>
                    <div class="col-sm-10">
                        <button type="submit" name="assign_now" class="btn btn-primary btn-sm m-b-0">Assign Role now</button>
                        <button type="button" class="btn btn-primary btn-sm m-b-0">Back</button>
                    </div>
                </div>
        </div>

        </form>
    </div>
</div>