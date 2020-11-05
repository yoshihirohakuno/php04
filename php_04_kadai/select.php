<?php

include("funcs.php");

//1.  DB接続します(関数化)
$pdo = db_connect();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM markers");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .="<tr>";
    $view .= '<td>'.$result['name'].'</td>';
    $view .= '<td>'.$result['address'].'</td>';
    $view .= '<td>'.$result['type'].'</td>';
    $view .= '<td>'.$result['comment'].'</td>';
    $view .= '<td>'.'<a href="u_view.php?id='.$result["id"].'">'.'<img src="update.png">'.'</td>';
    $view .= '</a>';
    $view .= '<td>'.'<a href="delete.php?id='.$result["id"].'">'.'<img src="delete.png" id="delete_1">'.'</td>';
    $view .='</a>';
  }

}

// var_dump($view);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お気に入り飲み屋一覧</title>
<link rel="stylesheet" href="style.css">
</head>

<body id="main">


<!-- Main[Start] -->
<table>
<tr>
    <th>店名</th>
    <th>住所</th>
    <th>ジャンル</th>
    <th>コメント </th>
    <th>更新</th>
    <th>削除</th>
</tr>

<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>

<!-- メニュー部分 -->
  <div id="list">
    <ul>  
        <li><a href="index.php"class="btn-flat-border">入力画面</a></li>
        <li><a href="index.html"class="btn-flat-border">地図を表示</a></li>
    </ul>
    
  </div>

<!-- 削除モーダル 時間があったらやる-->
<!-- <div id="mask" class="hidden"></div>

<section id="modal" class="hidden">
    <p>テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト</p>
    <div id="close">
        閉じる
    </div>
</section>

<script src="main.js"></script> -->
 
</body>
</html>