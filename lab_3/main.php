<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Лабораторная работа №3</title>

<!-- Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Александр Куликов" />
<meta name="description" content="Лабораторная работа №3" />
<!--Force latest IE rendering engine (& Chrome Frame if is installed)-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<style type="text/css">
		table.message {border: 1px solid #000000;}
		table.message td {border: 1px solid #000000;}
	</style>

</head>
<body bgcolor="white">

<a href="add.php">Добавить запись</a>
<br/><br/>

<?php

// links on adding 
// list of records


$filename = 'data.txt';
if (file_exists($filename))
{

	$file_handle = fopen($filename, 'r');
	$it = 1;
	
	while (!feof($file_handle))
	{
		$line = fgets($file_handle);
		$record = json_decode($line);
		if(!empty($record)) write_table($it++, $record);/* echo('<br/>');*/
	}
	fclose($file_handle);
}

?>

</body>
</html>

<?php

function write_table ($num, $record)
{ ?>

	<table class = "message">
		<tr><th colspan="2">Сообщение №<?php echo ($num)?></th></tr>
		<tr><td>Имя:</td><td><?php echo ($record->name)?></td></tr>
		<tr><td>Тел.:</td><td><?php echo ($record->phone)?></td></tr>
		<tr><td>ICQ:</td><td><?php echo ($record->icq)?></td></tr>
		<tr><td>Дата:</td><td><?php echo ($record->date_time)?></td></tr>
		<tr><td colspan="2" width="300"><?php echo ($record->message)?></td></tr>
	</table>
	<br/>
<?php }

?>