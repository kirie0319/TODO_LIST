<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/default.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <h1 class="ttl">Todo List<h1>
      <form action="/todo/create" method="POST">
        @csrf
        <input type="text" class="box input-box" name="content">
        <input type="submit" class="btn add-btn" value="追加">
      </form>
      <table>
        <tr class="t_top">
          <th>作成日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        @yield('content')
      </table>
    </div>
  </div>
</body>
</html>