<?php
session_start();
if (isset($_POST['type'])){
  if ($_POST['type']==='true'){
    $_SESSION['count']++;
  }

// echo $_POST['type'];
// echo '<br>';
// echo $_SESSION['count'];

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
  <h4 style="margin-left: 40px;">Вопрос 2 из 5</h4>
  <form action="./threeQ.php" method="POST">
    <fieldset>
      <legend>2. Какой федеральный целевой показатель выполнения тромболитической терапии у пациентов с ишемическим инсультом:</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="type" value="false" />
        <label for="сhoice1">5%</label>
        <br>
        <br>
        <input type="radio" id="сhoice2" name="type" value="false" />
        <label for="сhoice2">7%</label>
        <br>
        <br>
        <input type="radio" id="сhoice3" name="type" value="true" />
        <label for="сhoice3">10%</label>
        <br>
        <br>
        <input type="radio" id="сhoice4" name="type" value="false" />
        <label for="сhoice4">13%</label>

      </div>
      <br>
      <div>
        <button type="submit">Отправить ответ</button>
      </div>
    </fieldset>
  </form>
  
  
</body>

</html>