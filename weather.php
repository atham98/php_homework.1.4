<?php 

$id = 'weather?id=1497917';
$appid = 'appid=de649efb6c4dc96d792106d010e18149';

$link_weather = "http://api.openweathermap.org/data/2.5/" . $id . "&" . $appid;
$response = file_get_contents($link_weather);
$weather =  json_decode($response, true);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		dl {
			display: table-row;
		}
		dt,dd {
			display: table-cell;
			padding: 5px 10px;
			font-size: 25px;
		}
	</style>
</head>
<body>
	<h1>Погода Нефтеюганска</h1>

			<dl>
				<dt>Name</dt>
				<dd><?=$weather['name'] ?></dd>
			</dl>
			<dl>
				<dt>Weather</dt>
				<dd><?=$weather['weather'][0]['main'] ?></dd>
			</dl>
			<dl>
				<dt>Description</dt>
				<dd><?=$weather['weather'][0]['description'] ?></dd>
			</dl>
			<dl>
				<dt>Temperature</dt>
				<dd><?=$weather['main']['temp'] ?></dd>
			</dl>
			<dl>
				<dt>Visibility</dt>
				<dd><?=$weather['visibility'] ?></dd>
			</dl>
			<dl>
				<dt>Pressure</dt>
				<dd><?=$weather['main']['pressure'] ?></dd>
			</dl>

</body>
</html>



