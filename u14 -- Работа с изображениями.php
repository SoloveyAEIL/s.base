
  <h1>Unit 14. Работа с изображениями</h1>

      <p><b>Task 1.</b></p>
      <p>Создать функцию t1, которая на основе blank.png создает изображение и добавляет на него текст в формате - 2020-07-02 (год-месяц-день). Шрифт - Georgia ( 9605.ttf). Во всех остальных задачах - шрифт такой же. 
      Шрифт размером 40pt, размещение на исходном изображении - произвольное. Цвет - красный. Имя результирующего файла - task_1.png. Размещение - в текущей папке (все файлы в дальнейшем располагаются тут же). </p>
      <p>Обратите внимание - перед упаковкой ДЗ все результирующие файлы должны быть удалены!</p>
      <?php
          t1();

      // 
      function t1() {
          $imagePath = __DIR__."./images/blank.png";
          $fontPath = __DIR__."/9605.ttf";
          $image =imagecreatefrompng($imagePath);
          $color =imagecolorallocate($image, 255,0,0);
          $text =date('Y-m-d');
          
          imagettftext($image, 40, 0, 85, 85, $color, $fontPath, $text);
      
          imagepng($image, __DIR__.'/task_1.png');
          imagedestroy($image);
      }

      ?>
      <div>
      <img src="task_1.png" alt="" style="display: block;max-width: 80%;margin: 30px auto;">
      </div>

      <!--  -->

      <p><b>Task 2.</b></p>
      <p>Создать функцию t2, которая на основе blank.png создает изображение и добавляет на него файл flash.png - добавленное изображение должно располагаться по правому краю исходного blank.png. Результат - файл task_2.png.</p>
      <?php
          t2();
      
      // 
      function t2() {
          $imagePath = __DIR__."./images/blank.png";
          $flashPath = __DIR__.'./images/flash.png';
          $image =imagecreatefrompng($imagePath);
          $flash =imagecreatefrompng($flashPath);
          
          imagecopy($image, $flash, 512, 0, 0, 0,256, 256);
      
          imagepng($image, __DIR__.'/task_2.png');
          imagedestroy($image);
          imagedestroy($flash);
      }

      ?>
        <div>
      <img src="task_2.png" alt="" style="display: block;max-width: 80%;margin: 30px auto;">
      </div>

      <!--  -->

      <p><b>Task 3.</b></p>
        <p>Создать функцию t3, которая на основе blank.png добавляем изображения flash.png, spider.png, thor.png. Результат - файл task_3.png.</p>
      <?php
          t3();

      // 
      function t3() {
          $imagePath = __DIR__."./images/blank.png";
          $flashPath = __DIR__.'./images/flash.png';
          $spiderPath = __DIR__.'./images/spider.png';
          $thorPath = __DIR__.'./images/thor.png';
      
          $image =imagecreatefrompng($imagePath);
          $flash =imagecreatefrompng($flashPath);
          $spider =imagecreatefrompng($spiderPath);
          $thor =imagecreatefrompng($thorPath);
          
          imagecopy($image, $flash, 0, 0, 0, 0,256, 256);
          imagecopy($image, $spider, 256, 0, 0, 0,256, 256);
          imagecopy($image, $thor, 512, 0, 0, 0,256, 256);
      
          imagepng($image, __DIR__.'/task_3.png');
          imagedestroy($image);
          imagedestroy($flash);
          imagedestroy($spider);
          imagedestroy($thor);
      }

      ?>
        <div>
      <img src="task_3.png" alt="" style="display: block;max-width: 80%;margin: 30px auto;">
      </div>

      <!--  -->

      <p><b>Task 4.</b></p>
      <p>Создать функцию t5, которая создает изображение на основе blank.png и добавляем на него текст - 'hello' с углом поворота 45 градусов, цвет черный, размер 36. И добавляет изображение thor.png. Результат task_4.png</p>
      <?php
      t4();

      // 
      function  t4() {
          $imagePath = __DIR__."./images/blank.png";
          $fontPath = __DIR__."/9605.ttf";
          $thorPath = __DIR__.'./images/thor.png';
          $text = "hello";
      
          $image =imagecreatefrompng($imagePath);
          $color =imagecolorallocate($image, 0,0,0);
          $thor =imagecreatefrompng($thorPath);
          
          imagecopy($image, $thor, 450, 0, 0, 0,256, 256);
          imagettftext($image, 36, 45, 250, 160, $color, $fontPath, $text);
      
          imagepng($image, __DIR__.'/task_4.png');
          imagedestroy($thor);
      }

      ?>

        <div>
      <img src="task_4.png" alt="" style="display: block;max-width: 80%;margin: 30px auto;">
      </div>

      <!--  -->

      <p><b>Task 5.</b></p>
      <p>Создать функцию t5, которая создает НОВОЕ изображение png размером 300 на 300px. Смотрим команду imagecreatetruecolor. Добавьте в созданное изображение, рисунок flash.png с отступами 22px. Результат - task_5.png </p>
      <?php
      t5();

    //  
    function t5() {
        $flashPath = __DIR__.'./images/flash.png';
    
        $fone = imagecreatetruecolor(300,300);
        $flash = imagecreatefrompng($flashPath);
    
        imagecopy($fone, $flash, 22, 22, 0,0, 256,256);
    
        imagepng($fone, __DIR__."./task_5.png");
        imagedestroy($fone);
    }

      ?>

        <div>
      <img src="task_5.png" alt="" style="display: block;max-width: 80%;margin: 30px auto;">
      </div>

      <!--  -->

      <p><b>Task 6.</b></p>
      <p>Создать функцию t6, которая cоздает jpeg изображение размером 256 на 512px (512 - ширина) и добавляет туда текст - "hello jpeg". Цвет черный, размер 50. Сохраняет изображение под именем task_6.jpg.</p>
      <?php
      t6();

    //  
    function t6() {
        $fone = imagecreatetruecolor(512,265);
        $f = imagecolorallocate($fone, 3,145,250);
        imagefill($fone, 0,0,$f);
        $fontPath =__DIR__.'./9605.ttf';
        $text = "hello jpeg";
        $color = imagecolorallocate($fone, 0,0,0);
    
        imagettftext($fone, 50, 0, 100, 132, $color, $fontPath, $text);
    
        imagejpeg($fone, __DIR__."./task_6.jpg");
        imagedestroy($fone);
    }
    

      ?>

        <div>
      <img src="task_6.jpg" alt="" style="display: block;max-width: 80%;margin: 30px auto;">
      </div>
