<!DOCTYPE html>
<html>
<head>
	<title>алиска превью</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="modal"  id="as"><div class="m" id="asdf">ЕСЛИ ЭТО НЕ САМА АЛИСА ТО НЕ ТРОЖЬ.</div><input type="submit" class="asd"onclick="clickko();" value="назад" name=""></div>
	<div class="main">
		<img class="preview" src="img/preview.jpg" onclick="clickk();">
		<div class="test">Алиска-лисонька</div>
		<div class="year0">1. Не трогать. Только моя</div>
		<div class="year">2.  Этой няфке 14 лет</div><br>
		<div class="year1">3. Учится в 7 классе</div>
		<div class="year2">4. Ненавидит когда называют малой</div>
		<div class="year3">5. Моя деватька</div>
		<div class="year4">6. Живет в Кардымово</div>
		<input type="submit" name="sbm" value="галерея" onclick="clickko1();" class="text">
	</div>
</body>
<script>
	var perem = document.getElementById('as').style;
	var peremv = document.getElementById('asdf');
	var i =0;
	function clickk() {
		if (i == 1){
			peremv.innerHTML = "НУ БЛЯ. НЕ ТРОЖЬ.ПРОШУ ЖЕ";
		}
		if (i == 2){
			peremv.innerHTML = "НУ ТЫ ИЗДЕВАЕШЬСЯ?";
		}
		if (i == 3){
			peremv.innerHTML = "НУ ТЫ ЕБАНАТ ИЛИ КАК?";
		}
		if (i == 4){
			peremv.innerHTML = "ХВАТИТ. НЕ БУДЬ ПЕДОФИЛОМ";
		}
		if (i == 5){
			peremv.innerHTML = "АЛИСКА ПАСИБО ЧТО НЕ ЗАЕБАЛАСЬ ДОСЮДА ДОЙТИ";
		}
		if (i == 6){
			document.location.href = "НУ ЕСЛИ ДАЖЕ САЙТ УМНЕЕ ТЕБЯ ТО АЛИСУ Я ТЕБЕ ТОЧНО НЕ ДАМ";
		}
		
		perem.display = "block";
		i++;
	}
	function clickko() {
		perem.display = "none";
	}
	function clickko1() {
		document.location.href = "page2.php";
	}
</script>
</html>