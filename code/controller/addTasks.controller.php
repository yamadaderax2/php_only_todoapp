<?php
include('../model/taskModel.php');


if (isset($_POST['title'])) {
  $task = new Task;

  $array = array(
    'title' => $_POST['title'],
    'detail' => $_POST['detail'],
    'priority' => $_POST['priority'],
    'period' => $_POST['period']
  );

  $task->add($array);
  header("Location: allTasks.controller.php");
  exit();

}
else{
  include ('../view/add.view.php');
}
?>
