<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0, user-scalable=0, min-scale=1.0">
    <title>Контейнер</title>

    <link rel="stylesheet" href="./assets/css/Styles.css">

</head>
<body>



<div class =wrapper>

    <?php
    global $name;
    ?>






    <div class =content>

        <div class = container>




            <div class =content_text>




                <b1>
                    <p1>

                    <?php
                    //Розіменування змінної
                    $group = "TI";
                    $$group = "02";
                    echo "Group: $group $TI" . "<br><br>";

                    //Зміна iterable з типом array
                    $iterable = ["1", "2", "3", "4", "5"];
                    echo "\$iterable variable type: " . gettype($iterable) . "<br><br>";

                    //Приклад implode()
                    $iterable_str = implode(" ", $iterable);
                    echo "Implode: " . $iterable_str . "<br><br>";

                    $iterable = explode(" ", $iterable_str);
                    //Приклад foreach
                    foreach ($iterable as $iter){
                        echo "Iteration: " . $iter. "<br><br>";
                    }


                    echo "<br><br>";

                    //Жонглювання типами
                    $a = "0";
                    $b = 0;
                    $c = null;
                    $d = "";

                    echo var_dump($a == $b) . "<br>";
                    echo var_dump($b == $c). "<br>";
                    echo var_dump($a === $b). "<br>";
                    echo var_dump($b === $c). "<br><br>";

                    //Приклад використання класу
                    //Підключаємо клас DateTime, що є нащадком класу Date
                    require('./classes/DateTime.php');
                    $datetime = new DateTime1(2022, 6, 10, 13, 37, 48);
                    echo $datetime;
                    ?>
                    </p1>
                    <?php



                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        //Витягуємо дані з POST запросу
                        $name = $_REQUEST["find"];


                    }
                    ?>


                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><b4>
                            <div class="block_find">
                                <input type="text" name="find" placeholder="Пошук">
                                <button type="submit"></button>
                            </div>
                        </b4></form>



                    <b5>
                        <?php
                        //Підключаємо клас Database, що є прикладом singleton паттерна
                        require('./classes/dbcon.php');

                        //Підключаємось до бази даних
                        $db = (Database::getInstance())->connect();

                        $table = "class";


                        if(isset($_GET["table"])){

                            $table = $_GET["table"];
                        }

                        $query = "SELECT * FROM $table where name like '%$name%'";

                        //Отримуємо дані з базиданих
                        $result = mysqli_query($db, $query);
                        $cards = [];

                        //Створюємо масив що складається з асоціативних масивів
                        while ($card = mysqli_fetch_assoc($result)) {
                            $cards[] = $card;
                        }


                        //Приклад foreach для створювання html-компонентів за шаблоном
                        //Дані для підстановки у шаблон дастаєм з асоціативного масиву
                        foreach ($cards as $card) {
                            ?>
                            <div class="block3">

                                <img src="./assets/images/<?php echo $card["image"]; ?>" alt="" />

                                <?php echo $card["name"]; ?>

                            </div>
                            <?php
                        }

                        ?>

                    </b5>

                </b1>

            </div>
        </div>
    </div>
</div>





</body>
</html>
