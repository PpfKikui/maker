<?php require 'header.php'; ?>
<p>ここは私立きらめき高校。<br>
  あなたはこの高校に入学した男子生徒です。<br>
  <br>
  この学校であなたは幼馴染となんかいい感じの雰囲気になったり<br>
  <img src="images/cha3-1.jpg" width="270px"><br>
  <br>
  ラッキーパンチラに遭遇したりします。<br>
  <img src="images/cha3-2.jpg" width="270px"><br>
  <br>
  で、なんやかんやとリア充生活しているうちに３年が経過。<br>
  ついに迎えた卒業式の日――<br>
  <br>
  「あれっ、机の中に手紙が入ってるぞ。誰からだろう」</p>
  <br>
  <form action="output3.php" method="post">
    <table border="1" width="400" cellspacing="0" cellpadding="20">
      <tr>
      <td bgcolor="#FFFFFF">
        <font color="red" size="-1">↓あなたの名前を入れてね</font><br>
          <input type="text" name="tokimemo">さんへ<br>
          <br>
          伝説の樹の下で待ってます。<br>
      </td>
      </tr>
    </table>
    <br>
    <p>
    「名前は・・・どこにもないなぁ」<br>
    <br>
    そういえばこの学校には<br>
    【デッカイ樹の下で告白したらいいね<img src="images/good.jpg" width="20px">】<br>
    みたいな伝説があったような、なかったような。<br>
    <br>
    さて、あなたはどうする？
    </p>
    <input type="submit" value="【伝説の樹の下に行く】という選択肢以外はない">
  </form>
  <br>
  <br>
<?php require 'footer.php'; ?>
