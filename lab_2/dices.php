<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Лабораторная работа №2 - Кубики</title>

<!-- Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Александр Куликов" />
<meta name="description" content="Лабораторная работа №2" />
<!--Force latest IE rendering engine (& Chrome Frame if is installed)-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

</head>
<body bgcolor="white">

<?php

  $dice_1 = rand ( 1 , 6 );
  $dice_2 = rand ( 1 , 6 );
  $dice_summ = $dice_1 + $dice_2;
  
  if ($dice_summ > 5) $message = 'Вы выиграли';
  else $message = 'Вы проиграли';
  
?>
<style type="text/css">
  img {border-width: 0px; margin:0px; padding:0px;}
</style>

<div style="width:700px; height:460px; border: 1px solid #000000">

  <h4 style="text-align: center;">Игра "Кости"</h4>

  <div style="width:510px; height:254px; margin: 0px auto;" >
    <img src = "images/<?php echo($dice_1); ?>.jpg" />
    <img src = "images/<?php echo($dice_2); ?>.jpg" />
  </div>
  
  <h4 style="text-align: center;">У вас выпало число <?php echo($dice_summ); ?>.</h4>
  
  <h1 style="text-align: center;"><?php echo($message); ?> !</h1>
  
</div>

</body>
</html>

