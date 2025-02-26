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
  <h4 style="margin-left: 40px;">Вопрос 4 из 5</h4>
  <form action="./fiveQ.php" method="POST">
    <fieldset>
      <legend>4. На базе каких медицинских организаций расположены кабинеты для оказания специализированной медицинской помощи взрослым пациентам с рассеянным склерозом?</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="type" value="false" />
        <label for="сhoice1"><br>ГБУЗ НО «Городская клиническая больница № 7 Ленинского района г. Нижнего Новгорода им. Е.Л. Березова», <br> ГБУЗ НО «Городская клиническая больница № 39 Канавинского района г. Нижнего Новгорода», <br> ГБУЗ НО «Городская клиническая больница № 5 Нижегородского района г. Нижнего Новгорода»</label>
        <br>
        <input type="radio" id="сhoice2" name="type" value="true" />
        <label for="сhoice2"><br>ГБУЗ НО «Нижегородская областная клиническая больница им. Н.А. Семашко», <br> ГБУЗ НО «Городская больница № 33 Ленинского района г. Нижнего Новгорода», <br> ГБУЗ НО «Городская клиническая больница № 3 (НГЦ)»; </label>
        <br>
        <input type="radio" id="сhoice3" name="type" value="false" />
        <label for="сhoice3"><br>ГБУЗ НО «Городская клиническая больница № 35 Советского района г. Нижнего Новгорода», <br> ГБУЗ НО «Кстовская центральная районная больница», <br> ГБУЗ НО «Городская больница № 28 Московского района г. Нижнего Новгорода».</label>

      </div>
      <br>
      <div>
        <button type="submit">Отправить ответ</button>
      </div>
    </fieldset>
  </form>
  
</body>

</html>