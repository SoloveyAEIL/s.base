
<h1>Unit 11. Чтение и запись CSV файлов</h1>

    <p><b>Task 1.</b></p>
    <p>Создать функцию t1, которая выводит содержимое файла book1.csv на страницу. Формат вывода - элементы строки через пробел, строки - через br.</p>
    <?php
        echo '<pre>';
        t1();
        echo '</pre>';

    // 
    function t1() {
        if(($file = fopen('./one/book1.csv', 'r')) !== false) {
            while(($data = fgetcsv($file, 1000, ';')) !== false) {
                $out = " ";
                for ($i = 0; $i < count($data); $i++) {
                    $out.=$data[$i]." ";
                }
                echo $out;
                echo "<br>";
            }
            fclose($file);
        }
    }
    ?>

    <!--  -->

    <p><b>Task 2.</b></p>
    <p>Создать функцию t2, которая принимает параметр - путь к файлу csv и возвращает его содержимое преобразованное в массив.</p>
    <?php
    echo '<pre>';
    print_r(t2('./one/book1.csv'));
    echo '</pre>';

    // 
    function t2($path) {
        $arr = [];
        if(($file = fopen($path, 'r')) !== false) {
            while(($data = fgetcsv($file, 1000, ';'))!== false) {
                $arr[] = $data;
            }
            fclose($file);
        }
        var_dump($arr);
    }
    ?>

    <!--  -->

    <p><b>Task 3.</b></p>
    <p>Создать функцию t3, принимает парамет - путь к файлу CSV и возвращает только элементы колонки color через пробел. Т.е. строку типа red green blue.</p>
    <?php
    echo '<pre>';
    echo(t3('./one/book2.csv'));
    echo '</pre>';

    // 
    function t3($path) {
        if(($file = fopen($path, 'r')) !==false) {
            while(($data = fgetcsv($file, 1000, ';'))!== false) {
                $out = " ";
                for($i = 2; $i < count($data); ++$i) {
                    if($data[2] == 'color') continue;
                    $out .= $data[$i]." ";
                }
                echo $out;
            }
            fclose($file);
        }
    }
    ?>

    <!--  -->

    <p><b>Task 4.</b></p>
    <p>Создать функцию t4, которая принимает параметр - массив и имя ( расположение) файла. Создает файл CSV и записывает в него массив.</p>
    <?php
    echo '<pre>';
    $arr = [ [4,5,6], [7,8,9]];
    t4($arr, './one/book3.csv');
    echo '</pre>';

    // 
    function  t4($arr, $path) {
        $file = fopen($path, 'w');
        foreach($arr as $line) {
            fputcsv($file, $line, ';');
        }
        var_dump($arr);
        fclose($file);
    }
    ?>

    <!--  -->

    <p><b>Task 5.</b></p>
    <p>Создать функцию t5, которая принимает параметр - путь к файлу CSS и возвращает количество строк в нем.</p>
    <?php
    echo '<pre>';
    echo(t5('./one/book2.csv'));
    echo '</pre>';

    // 
    function t5($path) {
        $a =0;
        if(($file = fopen($path, 'r')) !== false) {
            while(($data = fgetcsv($file, 1000, ';')) !== false) {
                $a++;
            }
            fclose($file);
            }
            return $a;
    }
    ?>
