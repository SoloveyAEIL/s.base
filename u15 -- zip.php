
<h1>Unit 15. Работа с zip</h1>

    <p><b>Task 1.</b></p>
    <p>Создать функцию t1, которая создает 1.zip и добавляет в него файл t1.txt.</p>
    <?php
        t1();

    // 
    function t1() {
        $zip = new ZipArchive();
        $zipFile = '1.zip';
        if ($zip-> open($zipFile, ZipArchive::CREATE)!== true) {
            exit('errors');
        }
        $zip->addFile('t1.txt');

        echo 'Создан zip файл с вложением.<br>';
        $zip->close();
    }
    ?>

    <!--  -->

    <p><b>Task 2.</b></p>
    <p>Создать функцию t2, которая выводит размер файла t1.txt, создает архив 2.zip и выводит размер файла 2.zip.</p>
    <?php
        t2();

    // 
    function t2() {
        $zip = new ZipArchive();
        $zipFile = '2.zip';
        if($zip-> open($zipFile, ZipArchive::CREATE)!==true) {
            exit('errors');
        }
        $zip->addFile('t1.txt');
        $fs = filesize('t1.txt');
        echo "Размер вложенного файла: $fs байт.<br>";
        $fsZip = filesize('2.zip');
        echo "Размер zip файла: $fsZip байт";
    
        $zip->close();
    }
    ?>

    <!--  -->

    <p><b>Task 3.</b></p>
        <p>Создать функцию t3, которая создает 3.zip и добавляет в него t1.txt и файл images/flash.png.</p>
    <?php
        t3();

    // 
    function t3() {
        $zip = new ZipArchive();
        $zipFile = '3.zip';
        if($zip-> open($zipFile, ZipArchive::CREATE)!==true){
            exit('error');
        }
        $zip->addFile('t1.txt');
        $zip->addFile('./images/flash.png', 'flash.png');
    
        echo "Создан zip файл с вложением.<br>";
        $zip->close();
    }
    ?>

    <!--  -->

    <p><b>Task 4.</b></p>
    <p>Создайте функцию t4, которая создает архив 4.zip, и добавьте внутрь него файл t1.txt причем в архиве он должен быть в папке one.</p>
    <?php
    t4();

    // 
    function  t4() {
        $zip = new ZipArchive();
        $zipFile = '4.zip';
        if($zip-> open($zipFile, ZipArchive::CREATE)!==true){
            exit('error');
        }
        $zip->addFile('t1.txt', 'one/t1.txt');
    
        echo "Создан zip файл с вложением.<br>";
        $zip->close();
    }
    ?>

    <!--  -->

    <p><b>Task 5.</b></p>
    <p>Создайте функцию t5, которая принимает параметр - имя архива и имя папки, и распаковывает архив в указанную папку. </p>
    <?php
    $arc = '4.zip';
    $folder = '4_unzip';
    t5($arc, $folder);

    // 
    function t5($arc, $folder) {
        $zip = new ZipArchive();
        $zip -> open($arc);
        $zip -> extractTo($folder);
    
        echo "Файл успешно распакован.<br>";
        $zip -> close();
    }
    ?>
