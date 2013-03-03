<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Лабораторная работа №1</title>

<!-- Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Александр Куликов" />
<meta name="description" content="Лабораторная работа №2" />
<!--Force latest IE rendering engine (& Chrome Frame if is installed)-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

</head>
<body>

<?php

  $users_array = array(
                        'Александр',
                        'Дмитрий',
                        'Алексей',
                        'Юрий',
                        'Владимир',
                      );
  $is_user_registered = false;

  if (!empty($_POST['user']))
  {
    $user_name = $_POST['user'];
    if (in_array($user_name, $users_array)) $is_user_registered = true;
  }
  
  if ($is_user_registered)
  {
  }
  else
  { ?>
    <form action="" method="POST">
    <?php if(!$is_user_registered) { ?>
      <span style="color:red; font-weight:bold;">Пользователь не найден</span>
    <?php } ?>
    <input type="edit" value="" name="user"/>
    <input type="submit" value="Регистрация" />
    </form>
    
  <?php } ?>
  

</body>
</html>