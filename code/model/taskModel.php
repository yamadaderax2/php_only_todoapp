<?php

include('../model/db_info.php');

/**
 * Tasksテーブルに関する操作を行うクラス
 */
class Task
{
  private $link;
  public $title;
  public $detail;
  public $priority;
  public $period;

  function __construct()
  {
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DATABASE);
    $this->link = $link;
  }

  public function add($array)
  {
    $this->title = $array['title'];
    $this->detail = $array['detail'];
    $this->priority = $array['priority'];
    $this->period = $array['period'];


    $now = date("Y/m/d H:i:s");
    $sql = "INSERT INTO tasks(title, detail, priority, period, created_at) VALUES('{$this->title}', '{$this->detail}', {$this->priority}, '{$this->period}', '{$now}')";
    mysqli_query($this->link, $sql) or die("タスク追加に失敗しました。");
  }

  public function get_all()
  {
    $sql = "SELECT * FROM tasks WHERE status = 0";

  }
}

?>
