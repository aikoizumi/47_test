<?php
session_start();

$errors =[];

//if(isset($_GET['action']) && $_GET['action'] == 'rewrite'){
//    $_POST['input_name'] = $_SESSION['47_LearnSNS']['name'];
//    $_POST['input_email'] = $_SESSION['47_LearnSNS']['email'];
//     $_POST['input_password'] = $_SESSION['47_LearnSNS']['password'];
//  check.phpのphpの遷移が行われないように
//  $errors['rewrite'] = true;

if(!empty($_POST)){

  $name = $_POST['input_name'];
  $number = $_POST['input_number'];
  $people = $_POST['input_people'];
  $date = $_POST['input_date'];
  $time = $_POST['input_date'];

  if ($name == ''){
    $errors['name'] = 'blank';
  }
  if ($number ==''){
    $errors['number'] = 'blank';
  } 
  if ($people ==''){
    $errors['people'] = 'blank';
  } 
  if ($date ==''){
    $errors['date'] = 'blank';
  }
  if ($time ==''){
    $errors['time'] = 'blank';
  }
  

  if(empty($errors)){
         $_SESSION['test_myself']['name'] = $name;
         $_SESSION['test_myself']['number'] = $number;
         $_SESSION['test_myself']['people'] = $people;
         $_SESSION['test_myself']['date'] = $date;
         $_SESSION['test_myself']['']
  }
        header('Location: check.php');
        exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>reservation</title>
</head>
<link rel="stylesheet" type="text/css" href=new.scc>
<form method="POST" action="new.php">
   <div class ="">
     <label for = "name">Name</label>
     <?php if(isset($errors['name']) && $errors['name'] == 'blank'):?>
        <p class="text-danger">require name</p>
     <?php endif;?>
       <br>
         <input type="name" name="input_name"  value="" id="name" class="name-form" placeholder = "Mr.SOY">
        <br>
     <label for = "number">Number</label>
        <br>
     <?php if(isset($errors['number']) && $errors['number'] == 'blank'):?>
       <br>
        <p class="text-danger">confirm your phonenumber</p>
     <?php endif;?>
         <input type="tel" name="input_number" id="number"value="" placeholder="03XXXXXXXX">
         <br>
      <label for ="people">How many people?</label>
       <br>
        <input type="number" name="input_people" value="" id="people" min=2 max=15>
      <?php if(isset($errors['people']) && $errors['people'] == 'blank'):?>
      <p class = "text-danger">confirm number</p>
      <?php endif;?>
       <br>
       <input type="date" name="input_date" value="" id="date">
      <?php if(isset($errors['date']) && $errors['date'] == 'blank'):?>
      <p class = "text-danger">confirm number</p>
      <?php endif;?>
       <br>
       <select name="list">
          <option value="item1"selected>select time</option>
          <option value="item2">18:10</option>
          <option value="item3">18:30</option>
          <option value="item4">19:00</option>
          <option value="item5">19:30</option>
          <option value="item6">20:00</option>
          <option value="item7">20:30</option>
          <option value="item8">21:00</option>
       </select>
       <?php if(isset($errors['date']) && $errors['date'] == 'blank'):?>
      <p class = "text-danger">confirm number</p>
      <?php endif;?>
       <br>
        <input type="submit" class="btn btn-default" value="submit">
   </div>
</form>


