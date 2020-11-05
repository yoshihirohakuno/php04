<!-- 更新ページ -->
<?php
// 1.GETでid値を取得
$id = $_GET["id"];


//1.  DB接続します(関数化)
include("funcs.php");
$pdo = db_connect();
  
//３．SELECT
$sql = "SELECT * FROM markers WHERE id =:id" ;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


// 4.データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //1データのみ抽出の場合は、whileループで取り出さない
  $row = $stmt->fetch();
   
}

?>


<!--------- ここからHTML部分 ----------->
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
        <form method="post" action="update.php">
          <input type="text" name="name" size="50"  value="<?=$row["name"]?>" class="username form-control" placeholder="店名"/><br>
          <input type="text" name="address" size="50"  value="<?=$row["address"]?>" class="password form-control" placeholder="住所"/><br>
          <textArea name="comment" rows="4" cols="50"placeholder="コメント"><?=$row["comment"]?></textArea><br>
          <input type="hidden" name="id" value="<?=$row["id"]?>">
          

          
          <input type="submit" value="更 新" class="submit_b">
        
        </form>
      </div>
    </div>
  </div>  
</div>
<a href="select.php" class="btn-flat-border">リストに戻る</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
  
</script> 
</body>
</html>