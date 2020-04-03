<?php
include('../model/tasksModel.php');

$task = new Task;
if ($_POST['title']) {

}
else{
  include ('../view/add.view.php');
}
?>
