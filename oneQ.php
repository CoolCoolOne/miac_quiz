<?php
session_start();
$_SESSION['count']=0;
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
  <h4 style="margin-left: 40px;">Вопрос 1 из 5</h4>
  <form action="./twoQ.php" method="POST">
    <fieldset>
      <legend>1. В течение какого времени необходимо получить консультативное заключение нейрохирурга регионального сосудистого центра (РСЦ) у пациентов с геморрагическим инсультом с момента получения результатов КТ-исследования:</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="type" value="false" />
        <label for="сhoice1">Не позднее 30 минут</label>
        <br>
        <br>
        <input type="radio" id="сhoice2" name="type" value="true" />
        <label for="сhoice2">Не позднее 60 минут</label>
        <br>
        <br>
        <input type="radio" id="сhoice3" name="type" value="false" />
        <label for="сhoice3">В течение 24 часов</label>
        <br>
        <br>
        <input type="radio" id="сhoice4" name="type" value="false" />
        <label for="сhoice4">Временные сроки не установлены</label>

      </div>
      <br>
      <div>
        <button type="submit">Отправить ответ</button>
      </div>
    </fieldset>
  </form>
  <pre id="log"></pre>
</body>

</html>