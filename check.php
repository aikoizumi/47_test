<?php
session_start();

   $name = $_SESSION['test_myself']['name'];
   $phone= $_SESSION['test_myself']['number'];
   $people = $_SESSION['test_myself']['people'];
   $date = $_SESSION['test_myself']['date'];

  if(!empty($_POST)){
    //1.SQL文を用意
    $sql = 'INSERT INTO `users`(`name`,`email`,`password`,`img_name`,`created`) VALUES(?,?,?,?,NOW());';
    //2.?に代入したい値を設定
    $data = [$name,$email,password_hash($password,PASSWORD_DEFAULT),$img_name];//　passsword_hash(パスワード、PASSOWRD_DEFAULT)
    //3.SQLをセットする
    $stmt = $dbh->prepare($sql);
    //4.SQLを実行する
    $stmt->execute($data);

  //登録完了ページへ遷移
    //セッションに保持した内容は不要になったら破棄すること
  //unset($_SESSION["Learn_review_SNS"]);
  //unset($_SESSION['47_LearnSNS']);
  header('Location: thanks.php');
  exit();
  }

// if(!isset($_SESSION['test_myself'])){
//     header('Location: new.php');
//     exit();
//  }
  //$password = $_SESSION['47_LearnSNS']['password'];
  //$img_name = $_SESSION['47_LearnSNS']['img_name'];
  // if($)
  // header('location: thanks.php');
  // exit();
  ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>check.reservation</title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
  <form action=""
<div class="">
  <div class ="">Your name</div>
   <?php echo $name;?>
  <div class = "">Phone</div>
   <?php echo $phone;?>
  <div class="">People</div>
   <?php echo $people?>
  <div class=""></div>
   <?php echo $date?>

   <form method="POST" action="thanks.php">
   <input type="submit" class="btn btn-default" value="submit">
    </form>

</div>
</body>