<?php
session_start();
if (isset($_POST['type'])) {
  if ($_POST['type'] === 'true') {
    $_SESSION['count']++;
  }

  // echo $_POST['type'];
  // echo '<br>';
  // echo $_SESSION['count'];
  require_once './connect.php';
  $time = time();
  // echo '<br>';
  // echo $time;
  echo '<h4 style="margin-left: 40px;">Спасибо! Ответы приняты.</h4>';
  echo '<h4 style="margin-left: 40px;">Вы ответили правильно на '.$_SESSION['count'].' вопросов из 5 </h4>';
  switch ($_SESSION['count']) {
    case '0':
      $sql = "INSERT INTO table0 (time) VALUES ('$time')";

      break;
    case '1':
      $sql = "INSERT INTO table1 (time) VALUES ('$time')";

      break;
    case 2:
      $sql = "INSERT INTO table2 (time) VALUES ('$time')";

      break;
    case 3:
      $sql = "INSERT INTO table3 (time) VALUES ('$time')";

      break;
    case 4:
      $sql = "INSERT INTO table4 (time) VALUES ('$time')";

      break;
    case 5:
      $sql = "INSERT INTO table5 (time) VALUES ('$time')";

      break;
    default:
      echo "";
      break;
  }

  $pdo->exec($sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico"><!-- 32×32 -->
  <title>Опрос</title>
</head>



<body>
  <!-- <h4 style="margin-left: 40px;">Спасибо! Ответы приняты.</h4> -->


</body>

</html>