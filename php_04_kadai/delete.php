<?php
// 1.GETでidを取得
$id = $_GET["id"];


//1.  DB接続します(関数化)
include("funcs.php");
$pdo = db_connect();
  
//３．SELECT
$sql = 'DELETE FROM markers WHERE id =:id' ;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// 4.データ登録処理後
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //select.phpへリダイレクト
  header("Location: select.php");
  exit;
   
}