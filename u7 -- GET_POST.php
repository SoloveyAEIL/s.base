
<?php require_once './handler.php' ?>
            <!-- if (isset($_GET['action'])) {
                $action = trim($_GET['action']);
                switch ($action) {
                    case 1:
                        echo t1();
                        break;
                    case 2:
                        echo t2();
                        break;
                    case 3:
                        echo t3();
                        break;
                    case 4:
                        echo t4();
                        break;
                    case 5:
                        echo t5();
                        break;
                    case 6:
                        echo t6();
                        break;
                }
            }

            if (isset($_POST['action'])) {
                $action = trim($_POST['action']);
                switch ($action) {
                    case 1:
                        echo t7();
                        break;
                    case 2:
                        echo t8();
                        break;
                    case 3:
                        echo t9();
                        break;
                    case 4:
                        echo t10();
                        break;
                }
            } -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practics. Unit 07</title>
    <link rel="stylesheet" href="css/mustard-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Unit 07. Формы, GET, POST в PHP</h1>

    <section>
        <p><b>Task 1.</b></p>
        <p>Создать функцию t1, которая получает из inp-1 строку и возвращает ее. Обратите внимание на архитектуру приложения! Здесь и далее - если метод не указан, то GET.</p>
        <form action="handler.php">
            <div class="form-control">
                <label>Введите строку</label>
                <input type="text" placeholder="Напишите строку" name="inp-1" value="hi hello task 1">
            </div>
            <input type="hidden" name="action" value="1">
            <div class="form-control">
                <button class="button-primary">Task 1</button>
            </div>

            <?php
            function t1() {
                if (isset($_GET['inp-1'])){
                    return trim($_GET['inp-1']);
                }
                return false;
            }
            ?>

        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 2.</b></p>
        <p>Создать функцию t2, которая получает из inp-2-1 и inp-2-2 числа и возвращает большее из них.</p>
        <form action="handler.php">
            <div class="form-control">
                <label>Число 1</label>
                <input type="number" name="inp-2-1" value="22">
            </div>
            <div class="form-control">
                <label>Число 2</label>
                <input type="number" name="inp-2-2" value="5">
            </div>
            <input type="hidden" name="action" value="2">
            <div class="form-control">
                <button class="button-primary">Task 2</button>
            </div>

            <?php
            function t2() {
                // используем функцию https://www.php.net/manual/en/function.max.php
                return max($_GET['inp-2-1'],$_GET['inp-2-2']);
            }
            ?>

        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 3.</b></p>
        <p>Создать функцию t3, которая получает из inp-3 пароль и возвращает 1 если длина пароля больше 5 символов и 0 в других случаях.</p>
        <form action="handler.php">
            <div class="form-control">
                <label>Пароль</label>
                <input type="text" name="inp-3" value="22ssjs9">
            </div>
            <input type="hidden" name="action" value="3">
            <div class="form-control">
                <button class="button-primary">Task 3</button>
            </div>

            <?php
            function t3() {
                if(strlen($_GET['inp-3']) <=  5) return 0;
                else return 1;
            }
            ?>

        </form>
    </section>
    <!--  -->
    <section>
        <p>Создать функцию t4, которая получает из inp-4 год рождения пользователя и возвращает 1 если ему исполнилось 18 лет и 0 если нет.</p>
        <form action="handler.php">
            <div class="form-control">
                <label>Год рождения</label>
                <select name="inp-4">
                    <?php
                        for($i = 2020; $i >= 1920; $i--) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>

                </select>
            </div>
            <input type="hidden" name="action" value="4">
            <div class="form-control">
                <button class="button-primary">Task 4</button>
            </div>

            <?php
            function t4() {
                if(date("Y") - $_GET['inp-4'] >= 18) return 1;
                else return 0;
            }
            ?>

        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 5.</b></p>
        <p>Создать функцию t5, которая возвращает 1 если пользователь согласен с условиями лицензии и 0 если нет.</p>
        <form action="handler.php">
            <div class="form-control">
                <div class="form-control">
                    <label><input type="checkbox" value="yes" name="i-5">Согласен</label>
                </div>
            </div>
            <input type="hidden" name="action" value="5">
            <div class="form-control">
                <button class="button-primary">Task 5</button>
            </div>

            <?php
            function t5() {
                if(isset($_GET['i-5'])) return 1;
                else return 0;
            }
            ?>
        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 6.</b></p>
        <p>Создать функцию t6, которая возвращает value выбранного radio.</p>
        <form action="handler.php">
            <div class="form-control">
                <label><input type="radio" name="radio-1" value="green">Зеленый</label>
            </div>
            <div class="form-control">
                <label><input type="radio" name="radio-1" value="red">Красный</label>
            </div>
            <div class="form-control">
                <label><input type="radio" name="radio-1" value="blue" checked>Cиний</label>
            </div>
            <input type="hidden" name="action" value="6">
            <div class="form-control">
                <button class="button-primary">Task 6</button>
            </div>

            <?php
            function t6() {
            //    var_dump($_GET['radio-1']);
                if($_GET['radio-1'] == "green") return $_GET['radio-1'];
                elseif ($_GET['radio-1'] == "red") return $_GET['radio-1'];
                else return $_GET['radio-1'];
            }
            ?>

        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 7.</b></p>
        <p>Создать функцию t7, которая возвращает value выбранного radio. Метод передачи данных - POST.</p>
        <form action="handler.php" method="post">
            <div class="form-control">
                <label><input type="radio" name="radio-2" value="green">Зеленый</label>
            </div>
            <div class="form-control">
                <label><input type="radio" name="radio-2" value="red">Красный</label>
            </div>
            <div class="form-control">
                <label><input type="radio" name="radio-2" value="orange" checked>Оранжевый</label>
            </div>
            <input type="hidden" name="action" value="1">
            <div class="form-control">
                <button class="button-primary">Task 7</button>
            </div>

            <?php
            function t7() {
                // var_dump($_POST['radio-2']);
                if($_POST['radio-2'] ==  "green") return $_GET['radio-1'];
                elseif ($_POST['radio-2'] == "red") return $_GET['radio-1'];
                else return $_GET['radio-1'];
            }
            ?>
        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 8.</b></p>
        <p>Создать функцию t8, которая возвращает 1 если пользователь согласен с условиями лицензии и 0 если нет. Метод - POST</p>
        <form action="handler.php" method="post">
            <div class="form-control">
                    <label><input type="checkbox" value="yes" name="i-8">Согласен</label>
            </div>
            <input type="hidden" name="action" value="2">
            <div class="form-control">
                <button class="button-primary">Task 8</button>
            </div>

            <?php
            function t8() {
                if(isset($_POST['i-8'])) return 1;
                else return 0;
            }
            ?>

        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 9.</b></p>
        <p>Создать функцию t9, которая возвращает 1 если введенная строка содержит символ @. И 0 в противном случае. Метод - POST</p>
        <form action="handler.php" method="post">
            <div class="form-control">
                    <label>Email: </label>
                   <input type="text" value="example@test.com" name="i-9">
            </div>
            <input type="hidden" name="action" value="3">
            <div class="form-control">
                <button class="button-primary">Task 9</button>
            </div>

            <?php
            function t9() {
                $find = strpos($_POST['i-9'], "@");
                if($find === false) return 0;
                else return 1;
            }
            ?>

        </form>
    </section>
    <!--  -->
    <section>
        <p><b>Task 10.</b></p>
        <p>Создать функцию t10, которая возвращает текст введенный в textarea. Метод - POST</p>
        <form action="handler.php" method="post">
            <div class="form-control">
                <label>Email: </label>
                <textarea placeholder="Enter some text..." name="i-10"></textarea>
            </div>
            <input type="hidden" name="action" value="4">
            <div class="form-control">
                <button class="button-primary">Task 10</button>
            </div>

            <?php
            function t10() {
                return $_POST['i-10'];
            }
            ?>

        </form>
    </section>

</div>
</body>
</html>
