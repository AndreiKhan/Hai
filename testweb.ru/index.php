<!DOOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>TestWeb</title>
		<link type="text/css" rel="stylesheet" href="styles.css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	
	<body>
	
		<div id="allcontent">
		<header id="top">
			<img id="headerlog" src="img/log.png" alt="World Bank Publications logo"/>
			<img id="headernum" src="img/num.png" alt="World Bank Publications num"/>
		<header/>
		
		<div id="navig">
		<table>
		<tr>
			<th><a href="">Кредитные карты</a></th>
			<th class="sel"><a href="">Вклады</a></th>
			<th><a href="">Дебетовая карта</a></th>
			<th><a href="">Страхованние</a></th>
			<th><a href="">Друзья</a></ht>
			<th><a href="">Интернет-банк</a></th>
		</tr>
		</table>
		</div>
		
		<div id="chs">
			<ul>
				<li><a href="">Главная</a></li>
				<li> - <a href="">Вклады</a></li>
				<li class="now"> - Калькулятор</li>
			</ul>
		</div>
		
		<form method="POST" action="calc.php">
			<h1>Калькулятор</h1>
			
			<div class="tablerow">
				<p>Дата оформления вклада: </p>
				<input required type="date" name="datepicker">
			</div>
			
			<div class="tablerow">
				<p>Сумма вклада: </p>
				<input type="number" min="1000" max="3000000" id="myRangeInput" name="myRangeInput" value="1000">
				<input type="range" min="1000" max="3000000" id="myRange" name="myRange" value="1000">
			</div>
			
			<div class="tablerow">
				<p>Срок вклада: </p>
					<select name="years">
						<option value="12">1 год</option>
						<option value="24">2 года</option>
						<option value="36">3 года</option>
						<option value="48">4 года</option>
						<option value="60">5 лет</option>
					</select>
			</div>
			
			<div class="tablerow">
				<p>Пополнение вклада: </p>
					<input name="no" id="no" type="radio" value="no" checked>Нет 
					<input name="yes" id="yes" type="radio" value="yes">Да
			</div>
			
			<div class="tablerow">
				<p>Сумма пополнения вклада: </p>
				<input type="number" max="3000000" id="my2RangeInput" name="my2RangeInput" value="1000">
				<input type="range" min="1000" max="3000000" id="my2Range" name="my2Range" value="1000">
			</div>
			
			<input id="result" type="submit" value="Рассчитать">
			Результат:
		</form>
		
		<footer>
			<ul>
				<li>Кредитные карты</li>
				<li>Вклады</li>
				<li>Дебетовая карта</li>
				<li>Страхованние</li>
				<li>Друзья</li>
				<li>Интернет-банк</li>
			</ul>
		</footer>
		</div>
		
	</body>
</html>
