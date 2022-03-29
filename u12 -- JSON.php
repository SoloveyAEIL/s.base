
<h1>Unit 12. Чтение и запись JSON файлов</h1>

    <p><b>Внимание!</b> В данном задании мы работаем с JSON файлами. Для проверки валидности полученных, созданных файлов рекомендую сервис - <a href="https://tools.icoder.uz/json-validator.php" target="_blank">Validate JSON</a>. Для валидации загружаете файл через кнопку "Загрузить из файла" и нажимаете "Проверить".</p>
    <p><b>Task 1.</b></p>
    <p>Создать функцию t1, которая выводит содержимое файла book1.json на страницу. Формат вывода - элементы строки через пробел, строки - через br.</p>
    
    <p>Ожидаю такой вывод:</p>
    <pre><code>hi 1
                two 2
                four 4</code></pre>
    <p><b>Ваш вывод:</b></p>
    <?php
        echo '<pre>';
        t1();
        echo '</pre>';

    // 
    function t1() {
        $res = file_get_contents('one/book1.json');
        $data = json_decode($res, true);
            foreach($data as $v => $k) {
                echo $v." ".$k.'<br>';
            }
    }
    ?>

    <!--  -->

    <p><b>Task 2.</b></p>
    <p>Создать функцию t2, которая принимает параметр - путь к файлу json и возвращает его содержимое преобразованное в массив.</p>
    <?php
    echo '<pre><code>';
    print_r(t2('./one/book2.json'));
    echo '</code></pre>';

    // 
    function t2($path) {
        $res = file_get_contents($path);
        $data = json_decode($res, true);
        var_dump($data);
    }
    ?>

    <!--  -->

    <p><b>Task 3.</b></p>
    <p>Создать функцию t3, принимает парамет - путь к файлу json и возвращает только элементы колонки name через пробел. Т.е. строку типа red green blue.</p>
    <?php
    echo '<pre>';
    echo(t3('./one/book2.json'));
    echo '</pre>';

    // 
    function t3($path) {       
        $res = file_get_contents($path);
        $data = json_decode($res, true);
        $out = " ";
            for($i =0; $i < count($data); $i++) {
                $out .=$data[$i]['name']." ";
            }
            return $out;
    }
    ?>

    <!--  -->

    <p><b>Task 4.</b></p>
    <p>Создать функцию t4, которая принимает параметр - массив и имя ( расположение) файла. Создает файл json и записывает в него массив. Вывод на страницу (или то, что возвращате функция) здесь не важен. Важно появление файла в папке one.</p>
    <?php
    echo '<pre>';
    $arr = [[4,5,6], [7,8,9]];
    t4($arr, './one/book3.json');
    echo '</pre>';

    // 
    function  t4($arr, $path) {   
        $data = json_encode($arr);
        file_put_contents($path, $data);
        echo "Файл создан";
    }
    ?>

    <!--  -->

    <p><b>Task 5.</b></p>
    <p>Создать функцию t5, которая принимает параметр - путь к файлу json и возвращает количество записей в нем ( В данном примере ожидаю число 3 в выводе).</p>
    <?php
    echo '<pre>';
    echo(t5('./one/book1.json'));
    echo '</pre>';

    // 
    function t5($path) {
        $res = file_get_contents($path);
        $data = json_decode($res,true);
        $out = 0;
            for($i = 0; $i < count($data); $i++) {
                $out+= $i;
            }
            return $out;
    }
    ?>
