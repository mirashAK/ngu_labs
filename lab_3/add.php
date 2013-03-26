<html>
<head>
 <title>Страница добавления записи</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
	<style type="text/css">
		span.err {color: red;}
	</style>
 
</head>

<body bgcolor="white">

<a href="main.php">Просмотреть записи</a>
<br/><br/>

<?php

function post_validate ($name, &$errors)
{
  if (empty($_POST[$name]))
  {
    $errors[$name] = true;
    return '';
  }
  else return $_POST[$name];
}

$err_array = array();
$name = '';
$tel  = '';
$icq  = '';
$msg  = '';

if(!empty($_POST['seenform']) && $_POST['seenform'] == "y")
{

  $name = post_validate('name', $err_array);
  $tel  = post_validate('tel', $err_array);
  $icq  = post_validate('icq', $err_array);
  $msg  = post_validate('msg', $err_array);

  if (empty($err_array))
  {
    print "Было введено имя: $name<br>";
    print "Был введёт телефон :$tel<br>";
    print "Был введен icq: $icq<br>";
    print "Было введено сообщение: $msg<br>";

    $filename = 'data.txt';
    $file_handle = fopen($filename, 'a');

    $record = new stdClass();
    $record->name      = $name;
    $record->phone     = $tel;
    $record->icq       = $icq;
    $record->date_time = date('d.m.y H:i:s');
    $record->message   = $msg;

    $record = json_encode($record);

    fwrite($file_handle, $record."\n");
    fclose($file_handle);
	}
}

if ( empty($_POST['seenform']) || !empty($err_array))
{
  print "<div align=\"left\">\n";
  print "<form name=\"form\" action=\"add.php\" method=\"POST\">\n";
  print "<input type=\"hidden\" name=\"seenform\" value=\"y\">\n";

  print "<p>\n";
  print " Введите ваш ник:<br>\n";
  print " <input type=\"input\" name=\"name\" value=\"$name\" style=\"width:400;\">\n";
  if (!empty($err_array['name'])) print "<span class=\"err\">Поле не заполнено</span>";
  print "</p>\n";

  print "<p>\n";
  print " Введите свой телефон:<br>\n";
  print " <input type=\"input\" name=\"tel\" value=\"$tel\" style=\"width:400;\">\n";
  if (!empty($err_array['tel'])) print "<span class=\"err\">Поле не заполнено</span>";
  print "</p>\n";

  print "<p>\n";
  print " Введите свой номер icq:<br>\n";
  print " <input type=\"input\" name=\"icq\" value=\"$icq\" style=\"width:400;\">\n";
  if (!empty($err_array['icq'])) print "<span class=\"err\">Поле не заполнено</span>";
  print "</p>\n";

  print "<p>\n";
  print " Введите текст сообщения:<br>\n";
  print " <textarea name=\"msg\" style=\"width:400; height:200\">$msg</textarea>\n";
  if (!empty($err_array['msg'])) print "<span class=\"err\">Поле не заполнено</span>";
  print "</p>\n";

  print "<p>\n";
  print " <input type=\"submit\" value=\"Сохранить\">\n";
  print " <input type=\"reset\" value=\"Очистить\">\n";
  print "</p>\n";

  print "</div>\n";
  print "</form>\n";
}
?>

</body>
</html>