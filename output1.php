<?php require 'header.php'; ?>
<br>
<p>
  <font color="red" size="5">
    <?php
    $str=$_POST["user"];
    $_POST["user"]="";
    if(""!=$str){
      echo '100万ドルの夜景も、',$_REQUEST['user'],'さんの笑顔には敵わないよ';
    }
    else {
      echo "名前を入れてね";
    }
    ?>
</p>
</font>
<img src="images/night.jpg" width="270px">
<br>
<?php require 'footer.php'; ?>
