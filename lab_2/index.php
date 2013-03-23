<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Лабораторная работа №2 - Пользователи</title>

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
                        'Александр' => 'Добро пожаловать, ',
                        'Дмитрий' => 'Привет! ',
                        'Алексей' => 'Боброго утра, ',
                        'Юрий' => 'С возвращением, ',
                        'Владимир' => 'Welcome, ',
                      );

  if (!empty($_POST['user']))
  {
    $user_name = $_POST['user'];
    if (array_key_exists($user_name, $users_array))
    {
      echo ($users_array[$user_name].$user_name);
    }
    else form('Пользователь не опознан');
  }
  
  else form();
  
?>
  

</body>
</html>

<?php

  function form ($error = null)
  { ?>
  
    <form action="" method="POST">
    <?php if(!empty($error)) { ?>
      <span style="color:red; font-weight:bold;"><?php echo ($error); ?></span>
    <?php } ?>
    <input type="edit" value="" name="user"/>
    <input type="submit" value="Регистрация" />
    </form>
    
  <?php }

?>