<?php

// 1.POSTでid,title,url,commentを取得
$id      = $_POST['id'];
$name    =$_POST['name'];
$address =$_POST['address'];
$comment =$_POST['comment'];

include("funcs.php");

//2.  DB接続します(関数化)
$pdo = db_connect();

//３．UPDATE
$sql = 'UPDATE markers SET name=:name, address=:address, comment=:comment  WHERE id =:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',$name,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':address',$address,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment',$comment,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',$id,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
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







?>