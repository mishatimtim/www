<HTML>
  <HEAD>
    
<?php

/* Этот скрипт получает переменные из request.html */
$name1=$_POST["Name"];
$age=$_POST["Year"];
$link=$_POST["Link"];
$city=$_POST["City"];
$sex=$_POST["Sex"];
$animal=$_POST["Animal"];
$cleaning=$_POST["Clean"];
$cooking=$_POST["Cooking"];
$noise=$_POST["Shoom"];
$smoking=$_POST["Smoke"];
$drinking=$_POST["Alcohol"];
$sleep=$_POST["Sleep"];
$aboutme=$_POST["About_me"];
$aboutneiborhood=$_POST["About_neiborhood"];



 

/* Переменные для соединения с базой данных */ 
$hostname="localhost";
$username="host1412836";
$userpassword="370e3631";
$dbName="host1412836";

/* Таблица MySQL, в которой хранятся данные */ 
$userstable = "forms";  

/* создать соединение */ 
mysql_connect($hostname,$username,$userpassword) OR DIE("Не могу создать соединение "); 
mysql_query('set character_set_client="utf8"');
mysql_query('set character_set_results="utf8"');
/* выбрать базу данных. Если произойдет ошибка - вывести ее */ 
mysql_select_db($dbName) or die(mysql_error());  
 
/* составить запрос для вставки информации о клиенте в таблицу */ 
$query = "INSERT INTO $userstable(name1,age,link,city,sex ,animal,cleaning,cooking,noise,smoking,drinking,sleep,aboutme,aboutneiborhood)  VALUES('$name1','$age', '$link', '$city', '$sex' , '$animal', '$cleaning', '$cooking', '$noise', '$smoking', '$drinking', '$sleep', '$aboutme', '$aboutneiborhood')"; /*указать переменные которые записываются в бд*/
/* Выполнить запрос. Если произойдет ошибка - вывести ее. */ 
mysql_query($query) or die(mysql_error());  

/* Закрыть соединение */ 
mysql_close(); 
?>
<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=naitisoseda.html">
</HEAD>
  <BODY>
  </BODY>
</HTML>