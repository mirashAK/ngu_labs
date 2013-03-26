<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Лабораторная работа №2 - Таблица</title>

<!-- Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Александр Куликов" />
<meta name="description" content="Лабораторная работа №2" />
<!--Force latest IE rendering engine (& Chrome Frame if is installed)-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

</head>
<body bgcolor="white">

<table border=1>

<?php

  $total_count = 1;
  
  for ($i = 1; $i <= 7; $i++)
  {
    echo ('<tr style="text-align: center;">');
    for ($j = 1; $j <= 7; $j++)
    {
      
      if (($total_count % 3) == 0)
      {
        echo ('<td bgcolor="#CCCCCC" style="font-weight: bold;" >');
      }
      else
      {
        echo ('<td >');
      }
      echo ($total_count++);
      echo ('</td>');
    }
    echo ('</tr>');
  }
  
?>

<table>  

</body>
</html>

