<?php
$group= new Group();
$details=$group->single_group($_GET['session']);

echo print_r($details->id);

?>