<!-- 課題用index.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>飲み屋メモメモ</title>
  <link href="index.css" rel="stylesheet">
</head>
<body>


<!-- Main[Start] -->
<div class="index" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <h2>飲み屋メモメモ</h2>
        <form method="post" action="insert.php">
          <input type="text" name="name" size="50" class="username form-control" placeholder="店名"/><br>
          <input type="text" name="address" size="50" class="password form-control" placeholder="住所"/><br>
          <input type="text" name="lat" size="50" class="password form-control" placeholder="経度(大変お手数です...)"/><br>
          <input type="text" name="lng" size="50" class="password form-control" placeholder="緯度(恐縮です...)"/><br>
          <textArea name="comment" rows="4" cols="45" placeholder="コメント"></textArea><br>
          <select id="select" name="type"><br>
            <option value="restaurant">ごはん</option>
            <option value="sake">飲み屋</option>
          </select><br>
          <!-- <textArea name="comment" rows="4" cols="40"></textArea><br> -->
          
          <input type="submit" value="送 信" class="submit_b">
        
        </form>
      </div>
    </div>
  </div>  
</div>
    <div id="index_footer">
      <li><a id="list" href="select.php" class="btn-flat-border">飲み屋リスト</a></li><br>
      <li><a id="login" href="">ログイン(前回の課題で作ったので今回は時間の都合により省きます＿|￣|○)</a></li>
      <li><a id="logout" href="">ログアウト(前回の課題で作ったので今回は時間の都合により省きます＿|￣|○)</a></li>
        
    </div>

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
   
</body>
</html>