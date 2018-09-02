<?php require 'header.php'; ?>
<br><br>ばばーん<br>
<img src="images/cha3-3.jpg" width="270px"><br>
なんと、伝説の樹の下には変わり果てたヒロインの姿が！！<br>
<br>
「一体だれがこんな・・・」<br>
<br>
「おや？ヒロインの指先に何か書いてあるぞ？なになに？」<br>
<br>

<?php
$str=$_POST["tokimemo"];
$_POST["tokimemo"]="";
if(""!=$str){
  $good=md5($str);
  $subgood=substr($good,0,4);
}

$jpg = "images/message.jpg";
$afjpg= "to.jpg";
$font = dirname(__FILE__) ."/851MkPOP_001.ttf";
$text = hexdec($subgood);
$image = imagecreatefromjpeg($jpg);
$color = imagecolorallocate($image, 190, 0, 0);
imagettftext($image, 40, 10, 40, 165, $color, $font, $text);
imagejpeg($image, "to.jpg", 100);
echo "<img src= " . $afjpg . ">";
?>
<br>
<br>
「これは、ダイイングメッセージ！？」<br><br>
さて、犯人は誰だ？<br>
～Fin.～<br>
<?php require 'footer.php'; ?>
