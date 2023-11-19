<?php
error_reporting(1);
// require_once ("include/initialize.php");


// $group= new Group();
// $details=$group->all_groups();

// echo print_r($details);

$string = '30.050719-1.978948';
$pos = 8;
$begin = substr($string, 0, $pos+1);
$end = substr($string, $pos+1);

echo "First: " . $begin . "<br>";
echo "Second: " . $end;




?>

<input class="form-control" type="search" name="address" value="<?php echo $begin; ?>">
<input class="form-control" type="search" name="address" value="<?php echo $end; ?>">