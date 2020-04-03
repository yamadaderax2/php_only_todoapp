<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>タスク追加</title>
  </head>
  <body>
    <h1>Todoタスクの追加</h1>
    <form action="addTasks.controller.php" method="post">
      <p>title<input type="text" name="title" placeholder="タイトルを入力"></p>
      タスク詳細<textarea name="detail"></textarea>
      <p>
        優先度
        <select name="priority">
          <option value="0" selected>最優先</option>
          <option value="1">優先</option>
          <option value="2">指定なし</option>
        </select>
      </p>
      <p>
        期限：<input type="datetime-local" name="period">
      </p>
      <input type="submit" name="submit" value="登録">
    </form>
  </body>
</html>
