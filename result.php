<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"><!-- 32×32 -->
    <link rel="stylesheet" href="./styles.css">
    <title>Результаты</title>


</head>

<body>
    <img width="400px" src="./logo.png" alt="логотипс">


    <?php

    require_once './connect.php';


    $sql = "SELECT COUNT(id) FROM table5";
    $true_5 = $pdo->query($sql);
    $true_5 = $true_5->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT COUNT(id) FROM table4";
    $true_4 = $pdo->query($sql);
    $true_4 = $true_4->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT COUNT(id) FROM table3";
    $true_3 = $pdo->query($sql);
    $true_3 = $true_3->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT COUNT(id) FROM table2";
    $true_2 = $pdo->query($sql);
    $true_2 = $true_2->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT COUNT(id) FROM table1";
    $true_1 = $pdo->query($sql);
    $true_1 = $true_1->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT COUNT(id) FROM table0";
    $true_0 = $pdo->query($sql);
    $true_0 = $true_0->fetch(PDO::FETCH_ASSOC);

    $sum = $true_0['COUNT(id)'] + $true_1['COUNT(id)'] + $true_2['COUNT(id)'] + $true_3['COUNT(id)'] + $true_4['COUNT(id)'] + $true_5['COUNT(id)'];



    if ($sum !== 0) {
        $true_0_pc = round(($true_0['COUNT(id)'] / $sum) * 100);
        $true_1_pc = round(($true_1['COUNT(id)'] / $sum) * 100);
        $true_2_pc = round(($true_2['COUNT(id)'] / $sum) * 100);
        $true_3_pc = round(($true_3['COUNT(id)'] / $sum) * 100);
        $true_4_pc = round(($true_4['COUNT(id)'] / $sum) * 100);
        $true_5_pc = round(($true_5['COUNT(id)'] / $sum) * 100);


        echo '<h2>Результаты:</h2>' . '<br><hr>';
    ?>

            




        <?php

        echo '<div class="results">';

        echo '<div class="text">';

        echo 'На 5 из 5 ответили верно: ' . $true_5['COUNT(id)'] . ' (' . $true_5_pc . '%) ' . '<br><br>';
        echo 'На 4 из 5 ответили верно: ' . $true_4['COUNT(id)'] . ' (' . $true_4_pc . '%) ' . '<br><br>';
        echo 'На 3 из 5 ответили верно: ' . $true_3['COUNT(id)'] . ' (' . $true_3_pc . '%) ' . '<br><br>';
        echo 'На 2 из 5 ответили верно: ' . $true_2['COUNT(id)'] . ' (' . $true_2_pc . '%) ' . '<br><br>';
        echo 'На 1 из 5 ответили верно: ' . $true_1['COUNT(id)'] . ' (' . $true_1_pc . '%) ' . '<br><br>';
        echo 'На все вопросы неверно:  ' .  $true_0['COUNT(id)'] . ' (' . $true_0_pc . '%) ' . '<br><br>';

        echo '</div>';
        $dataPoints = array(
            array("label" => "все верно", "y" => $true_5['COUNT(id)']),
            array("label" => "4 из 5", "y" => $true_4['COUNT(id)']),
            array("label" => "3 из 5", "y" => $true_3['COUNT(id)']),
            array("label" => "2 из 5", "y" => $true_2['COUNT(id)']),
            array("label" => "1 из 5", "y" => $true_1['COUNT(id)']),
            array("label" => "все неверно", "y" => $true_0['COUNT(id)'])
        );
        echo '<div class="pie">';

        ?>
        <script>
            window.onload = function() {
                CanvasJS.addColorSet("greenShades",
                    [ //colorSet Array

                        "#32CD32",
                        "#9ACD32",
                        "#FFFF00",
                        "#FFC0CB",
                        "#FFA500",
                        "#8B0000"
                    ]);


                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    exportEnabled: true,

                    colorSet: "greenShades",
                    data: [{
                        type: "column", //change type to bar, line, area, pie, etc
                        indexLabel: "{y}", //Shows y value on all Data Points
                        indexLabelFontColor: "#5A5757",
                        indexLabelPlacement: "outside",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();

            }
        </script>
        <div id="chartContainer" style="height: 600px; width: 60%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <?php

        echo '</div>';

        echo '</div>';

        echo '<hr>';
    }

    echo '<h3>Всего голосов: ' . $sum . '</h3>';
    ?>

    <hr>

    <h3><a href="./result.php">Обновить страницу</a></h3>

    <hr>

    <h3><a href="./index.html">Пройти опрос по ссылке (miac.nnov.ru/quiz) или QR:</a></h3>
<img width="40%" src="./qr-code.png" alt="qr-code">
    <hr>

    <h3><a href="./del_result.php">Сбросить голоса</a></h3>

    <hr>
    


</body>

</html>