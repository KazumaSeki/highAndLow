<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <title>High&Lowゲーム</title>
    <link rel="stylesheet" href="highAndLow.css">
  </head>
  <body>
    <?php
      $cards=array("JK.png", "01.png", "02.png", "03.png", "04.png", "05.png", "06.png",
                     "07.png", "08.png", "09.png", "10.png", "11.png", "12.png", "13.png");
      $invisibledCard=mt_rand(0,13);

      $visibleCardNo=$_POST['visibleCard'];
      $highOrLow=$_POST['select'];
    ?>
    <div class="container">
      <h1>High&Lowゲーム by関</h1>
      <hr>
      <?php
        echo '<img src="../cards/'.$cards[$visibleCardNo].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<img src="../cards/'.$cards[$invisibledCard].'"><br><br>';
        echo "{$highOrLow}を選択しました。<br><br>";

        if ($visibleCardNo<$invisibledCard) {
          $result="High";
        }
        elseif ($visibleCardNo>$invisibledCard) {
          $result="Low";
        }
        else {
          $result=$highOrLow;
        }

        if ($highOrLow==$result) {
          echo "You Win!<br><br>";
        }
        else {
          echo "You Lose...<br><br>";
        }
      ?>
      <a href="highAndLow.php">もう一度挑戦</a>
    </div>
  </body>
</html>
