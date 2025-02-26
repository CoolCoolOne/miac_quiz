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
  <h4 style="margin-left: 40px;">Вопрос 3 из 5</h4>
  <form action="./fourQ.php" method="POST">
    <fieldset>
      <legend>3. В течение скольких лет с момента постановки диагноза пациенты, которые перенесли острое нарушение мозгового кровообращения, находятся под диспансерным наблюдением и не имеют группы инвалидности, имеют право на льготное лекарственное обеспечение согласно приказу МЗ НО от 07.10.2024 № 315-826/24П/од «О порядке лекарственного обеспечения в амбулаторных условиях лиц, проживающих на территории Нижегородской области , перенесших сердечно-сосудистые заболевания»</legend>
      <div>
        <br>
        <input type="radio" id="сhoice1" name="type" value="false" />
        <label for="сhoice1">1 год</label>
        <br>
        <br>
        <input type="radio" id="сhoice2" name="type" value="false" />
        <label for="сhoice2">3 года</label>
        <br>
        <br>
        <input type="radio" id="сhoice3" name="type" value="true" />
        <label for="сhoice3">2 года</label>

      </div>
      <br>
      <div>
        <button type="submit">Отправить ответ</button>
      </div>
    </fieldset>
  </form>
  
</body>

</html>