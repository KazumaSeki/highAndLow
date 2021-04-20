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
      $visibleCard=mt_rand(0,13);
    ?>
    <div class="container">
      <h1>High&Lowゲーム by関</h1>
      <hr>
      <img src="../cards/<?php echo $cards[$visibleCard]; ?>" alt="表示されているカード">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="../cards/bg.png" alt="カード裏側">
      <form action="highAndLowPostData.php" method="post">
        <input type="radio" name="select" value="High">High
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="select" value="Low">Low
        <br><br>
        <input type="submit" value="決定">
        <input type="hidden" name="visibleCard" value="<?php echo $visibleCard; ?>">
      </form>
    </div>
  </body>
</html>
