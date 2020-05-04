<!DOCTYPE html>
<html>
<head>
	<title>2 страница</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="main">
			<img class="preview1" onclick="clickk();" src="img/4.jpg">
			<img class="preview2" onclick="clickk();" src="img/1.jpg">
			<img class="preview3" onclick="clickk();" src="img/3.jpg">
			<img class="preview" onclick="clickk();" src="img/preview.jpg">
			<input type="submit" class="key" name="" value="назад" onclick="nm();">
			</div><div class="modal"  id="as"><div class="m" id="asdf">ЕСЛИ ЭТО НЕ САМА АЛИСА ТО НЕ ТРОЖЬ.</div><input type="submit" class="asd"onclick="clickko();" value="назад" name=""></div>
</body>
<script>
	var i=0;
	var perem = document.getElementById('as').style;
	var peremv = document.getElementById('asdf');
	function  nm() {
		document.location.href = "index.php";
	}
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
</script>
</html>