<?php
include('../model/taskModel.php');

$task = new Task;
if (isset($_POST['title'])) {

}
else{
  include ('../view/add.view.php');
}
?>
