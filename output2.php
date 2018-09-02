<?php require 'header.php'; ?>
<br>
<p>あなたのいいところは、今思いついただけでも<br>
  <font color="red" size="16">
  <?php
  $str=$_POST["pass"];
  $_POST["pass"]="";
  if(""!=$str){
    $good=md5($str);
    $subgood=substr($good,0,4);
    echo hexdec($subgood);
  }
  ?>
</font>
<font color="red" size="5">個</font>あるよ★</p>
<img src="images/cha2.jpg" width="270px">
<br>
<?php require 'footer.php'; ?>
