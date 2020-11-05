<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name =$_POST['name'];
$address =$_POST['address'];
$lat =$_POST['lat'];
$lng =$_POST['lng'];
$type =$_POST['type'];
$comment =$_POST['comment'];



//2.  DB接続します
include("funcs.php");
$pdo = db_connect();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO markers( id,name,address,lat,lng,type,comment )VALUES(NULL,:name, :address, :lat,:lng, :type,:comment ) ");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':address', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lat', $lat , PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lng', $lng , PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':type', $type , PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment , PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{

//書き込みが成功した場合
//５．index.phpへリダイレクト status='OK!'
  
  header("Location: index.php");
  exit;


}
?>