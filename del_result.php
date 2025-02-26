<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
</head>

<body>



    <?php
        require_once './connect.php';

    if (isset($_GET['del'])) {
        if ($_GET['del'] == '1') {
            $sql = "TRUNCATE TABLE table0";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE table1";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE table2";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE table3";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE table4";
            $pdo->exec($sql);
            $sql = "TRUNCATE TABLE table5";
            $pdo->exec($sql);
        }
    }

    echo 'Для удаления всех голосов нажмите:' . '<br><br>';

  
    ?>

<hr>

<a href="./del_result.php?del=1">Удалить голоса</a>
<br>
<a href="./result.php">Вернуться к результатам</a>

</body>

</html>