
<h1>Unit 10. Работа с файлами</h1>

    <p><b>Task 1.</b></p>
    <p>Создать функцию t1, возвращает текущее время unix.</p>
    <?php
        echo '<pre>';
        echo(t1());
        echo '</pre>';
    
    // 
    function t1() {
        echo time();
    }
    ?>

    <!--  -->

    <p><b>Task 2.</b></p>
    <p>Создать функцию t2, возвращает текущий день недели в формате Sun, Mon...</p>
    <?php
    echo '<pre>';
    echo(t2());
    echo '</pre>';

    // 
    function t2() {
        echo date("D");
    }
    ?>

    <!--  -->

    <p><b>Task 3.</b></p>
    <p>Создать функцию t3, возвращает 1 или 0 в зависимости от того является год високосным или нет. Функция принимает год в качестве параметра.</p>
    <?php
    echo '<pre>';
    echo(t3(2006));
    echo '</pre>';

    // 
    function t3($year) {
        $vYears = 0;
        for($i = 2000; $i <= 2096; $i = $i +4) {
            if($year != $i) $vYears;
            else $vYears =  1;
        }
        echo $vYears;
    }
    ?>

    <!--  -->

    <p><b>Task 4.</b></p>
    <p>Создать функцию t4, которая возвращет номер текущего месяца с ведущим нулем.</p>
    <?php
    echo '<pre>';
    echo(t4());
    echo '</pre>';

    // 
    function  t4() {
        echo date('m');
    }
    ?>

    <!--  -->

    <p><b>Task 5.</b></p>
    <p>Создать функцию t5, которая возвращает дату в формате 2020-03-14 22:45. Дата и время - текущее.</p>
    <?php
    echo '<pre>';
    echo(t5());
    echo '</pre>';

    // 
    function t5() {
        date_default_timezone_set("Europe/Moscow");
        echo date('Y-m-d h:i');
    }
    ?>

    <!--  -->

    <p><b>Task 6.</b></p>
    <p>Создать функцию t6, которая возвращает время полуночи текущего дня в unixtime.</p>
    <?php
    echo '<pre>';
    echo(t6());
    echo '</pre>';

    // 
    function t6() {
        $now = date('Y-m-d 00:00');
        echo strtotime($now);
    }
    ?>

    <!--  -->

    <p><b>Task 7.</b></p>
    <p>Создать функцию t7 которая принимает номер месяца от 1 до 12 и выводит unixtime полночи первого дня принятого месяца.</p>
    <?php
    echo '<pre>';
    t7( 5);
    echo '</pre>';

    // 
    function t7($m) {
        $dat = date("Y-$m-1 00:00");
        echo strtotime($dat);
    }
    ?>

    <!--  -->

    <p><b>Task 8.</b></p>
    <p>Создать функцию t8 которая принимает дату в unixtime и возвращает 1 если сегодня суббота или воскресенье и 0 в противном случае.</p>
    <?php
    echo '<pre>';
    echo(t8(1592404218));
    echo '</pre>';

    // 
    function t8($t) {
        // echo date('D', $t);
        {
            $dd = " ";
            if(date('D', $t) == 'Sun' OR date('D', $t) == 'Sabt') $dd = 1;
            else $dd = 0;
        }
        echo $dd;
    }
    ?>

    <!--  -->

    <p><b>Task 9.</b></p>
    <p>Создать функцию t9, которая принимает дату рождения в формате 2000 Jan 1 и возвращает количество прожитых дней. </p>
    <?php
    echo '<pre>';
    echo(t9('2001 Jan 23'));
    echo '</pre>';

    // 
    function t9($s) {
        $arr = array();
        $arr = explode(" ", $s);
    
        $now = time();
        $pre = strtotime("$arr[2] $arr[1] $arr[0]");
        $days = ($now - $pre) / 86400;
        echo floor($days);
    }
    ?>

    <!--  -->

    <p><b>Task 10.</b></p>
    <p>Создать функцию t10, которая возвращает показывает время в секундах прошедших с начала текущего года.</p>
    <?php
    echo '<pre>';
    echo(t10());
    echo '</pre>';

    // 
    function t10() {
        $myYear = date("Y-1-1 00:00");
        $unxY = strtotime($myYear);
        echo $secInYear = time() - $unxY;
    }
    ?>
