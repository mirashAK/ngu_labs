<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Лабораторная работа №1</title>

<!-- Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Александр Куликов" />
<meta name="description" content="Лабораторная работа №1" />
<!--Force latest IE rendering engine (& Chrome Frame if is installed)-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

</head>
<body>

<?php

  if (!empty($_GET['color'])) $color = $_GET['color'];
  else $color = 'B4D000';
  
  echo ('<span style="color:#'.$color.'; font-weight:bold;" >');
  echo ('Куликов'); echo ('<br/>');
  echo ('Александр'); echo ('<br/>');
  echo ('Юрьевич'); echo ('<br/>');
  echo ('</span>');
  
  $result = (2+2*2)/2 + 4.7;
  var_dump($result); echo ('<br/>');
  
  $test_arr = array (
                      'циркулярная юла',
                      'антиадминский щиток',
                      'шлем искренних мыслей',
                      'пояс суеверности',
                      'рукавицы невоздержанности',
                      'готоваленки',
                      'значок «Я - герой!»'
                    );
  
  $rand = rand ( 0 , 6 );
  
  echo ($test_arr[$rand]); echo ('<br/>');

?>

</body>
</html>