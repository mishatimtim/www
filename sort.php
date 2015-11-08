<html>
	<head>
	</head>
	<body>
	<link  rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="pic/icon.ico">
	<h2 id="sp-header-wrapper" > <div id="left"> <a href="index.html"  > Главная </a> </div> <div id="center1">  <a href="request.html"  >Заполнить анкету</a> </div>
<div id="center2"> <a href="naitisoseda.html"  >Поиск соседа</a> </div> <div id="right"> <a href="FAQ.html" >FAQ</a> </div> </h2>
	<div class="content">
	<form action="scripts/email.php" method="post" name="forma">	
	<br><br><h3 id='mode'>Подходят указанным вами критериям:</h3>
	<fieldset id="fon1">
	<?php
	/* Этот скрипт получает переменные из naitisoseda.html */
	$sexF=$_POST["SexF"];
	$animalF=$_POST["AnimalF"];
	$cleaningF=$_POST["CleanF"];
	$cookingF=$_POST["CookingF"];
	$noiseF=$_POST["ShoomF"];
	$smokingF=$_POST["SmokeF"];
	$drinkingF=$_POST["AlcoholF"];
	$sleepF=$_POST["SleepF"];
	// Соединиться с сервером БД
	mysql_connect("localhost", "host1412836", "370e3631") or die (mysql_error ());

	// Выбрать БД
	mysql_select_db("host1412836") or die(mysql_error());

	// SQL-запрос с множесвенной выборкой
	if($sexF!==Не){
		if($animalF!==Не){
			if($sleepF!==Не){
	$strSQL = "SELECT * FROM forms WHERE sex='$sexF' and animal = '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep='$sleepF'";
							}
			else{
		$strSQL = "SELECT * FROM forms WHERE sex='$sexF' and animal = '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep!='$sleepF'";
				}
						 }
		else{
			if($sleepF!==Не){
		$strSQL = "SELECT * FROM forms WHERE sex='$sexF' and animal != '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep='$sleepF'";
							}
			else{
		$strSQL = "SELECT * FROM forms WHERE sex='$sexF' and animal != '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep!='$sleepF'";
				}
			}
					}
	else{
		if($animalF!==Не){
			if($sleepF!==Не){
	$strSQL = "SELECT * FROM forms WHERE sex!='$sexF' and animal = '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep='$sleepF'";
							}
			else{
		$strSQL = "SELECT * FROM forms WHERE sex!='$sexF' and animal = '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep!='$sleepF'";
				}
						 }
		else{
			if($sleepF!==Не){
		$strSQL = "SELECT * FROM forms WHERE sex!='sexF' and animal != '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep='$sleepF'";
							}
			else{
		$strSQL = "SELECT * FROM forms WHERE sex!='$sexF' and animal != '$animalF'and cleaning='$cleaningF' and cooking='$cookingF' and noise='$noiseF' and smoking='$smokingF' and drinking='$drinkingF' and sleep!='$sleepF'";
				}
			}
		}
	// Выполнить запрос (набор данных $rs содержит результат)
	$rs = mysql_query($strSQL);
	
	// Каждый ряд становится массивом ($row)
	
	while($row=mysql_fetch_array($rs)) {
		// Записать значение столбцов
	
	  echo "<b>".$row['name1']."</b> ".$row['age']."  лет <br>Страница в соц. сетях или адрес электронной почты:  ".$row['link']."<br>Родной город:  ".$row['city']."<br>Пол:  ".$row['sex']."<br>".$row['animal']."<br>".$row['cleaning']."<br>".$row['cooking']."<br>".$row['noise']."<br>".$row['smoking']."<br>".$row['drinking']."<br>".$row['sleep']."<br>Немного о человеке:  ".$row['Aboutme']."<br>Немного о преподчитаемом соседе:  ".$row['Aboutneiborhood']."<br>";
	  
	}
	
	
	echo "<p><b>Попробуйте изменить некоторые параметры для большего количества совпадений.</b></p>";
	// Закрыть соединение с БД
	
	mysql_close();
	
	
	?>
	</form>
	</div>
	</body>
	</html>
	