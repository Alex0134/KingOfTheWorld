<?php
$name = "Леонид";
$username = "Шевкопляс";
$age = 15;
$vk = 'https://vk.com/id81890129';
$about = 'Ученик лицея при "УЛГТУ"';
?>
<!Doctype html>
<html>
<head>
	<title><?= $surname . ' '. $name; ?></title>
    <meta charset="utf-8">
    <style type="text/css">
     body{
     	 font-family: sans-serif;
     }

     dl{
     	display: table-row;
     }

    dt, dd{
    	display: table-cell;
    	padding:  3px 8px;
    }
    </style>
<head>

<body>
   <h1>Страница пользователя <?=$surname .' ' . $name;?></h1>
      <dl>
      	 <dt>Имя</dt>
      	 <dd><?=$name; ?></dd>
      <dl>
         <dt>Фамилия</dt>
      	 <dd><?= $username; ?></dd>
      <dl>
      	 <dt>Возраст</dt>
      	 <dd><?= $age; ?></dd>
      <dl>
         <dt>Страница</dt>
     	 <dd><?= $vk; ?></dd>
      <dl>
         <dt>О себе</dt>
      	 <dd><?= $about; ?></dd>
      <dl>
</body>
</html>























