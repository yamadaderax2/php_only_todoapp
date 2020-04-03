<?php

include ('./model/db_info.php');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DATABASE);

for ($i=0; $i < 10; $i++) {
  $priority = mt_rand(0, 5);
  $query = "insert into tasks(title, detail, priority, created_at) values ('テスト{$i}', 'テスト{$i}の詳細です。', {$priority}, now())";
  mysqli_query($link, $query);
}

$result = mysqli_query($link, "select * from tasks");
while ($a = mysqli_fetch_assoc($result)) {
  echo var_dump($a);
}
?>
