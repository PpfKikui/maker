<?php require 'header.php'; ?>
<br><br>
  <?php
  $str=$_POST["user"];
  $_POST["user"]="";
  if(""!=$str){
    $good=md5($str);
    $subgood=substr($good,0,4);
    }
    $amari=hexdec($subgood)%12;
    if($amari==0){
      echo "<img src=\"images/job/0.jpg\">";
    }
    if($amari==1){
      echo "<img src=\"images/job/1.jpg\">";
    }
    if($amari==2){
      echo "<img src=\"images/job/2.jpg\">";
    }
    if($amari==3){
      echo "<img src=\"images/job/3.jpg\">";
    }
    if($amari==4){
      echo "<img src=\"images/job/4.jpg\">";
    }
    if($amari==5){
      echo "<img src=\"images/job/5.jpg\">";
    }
    if($amari==6){
      echo "<img src=\"images/job/6.jpg\">";
    }
    if($amari==7){
      echo "<img src=\"images/job/7.jpg\">";
    }
    if($amari==8){
      echo "<img src=\"images/job/8.jpg\">";
    }
    if($amari==9){
      echo "<img src=\"images/job/9.jpg\">";
    }
    if($amari==10){
      echo "<img src=\"images/job/10.jpg\">";
    }
    if($amari==11){
      echo "<img src=\"images/job/11.jpg\">";
    }
  ?>
<br>
<?php require 'footer.php'; ?>
