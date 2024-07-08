<!DOCTYPE html>
<html lang="hu">

<head>
	<title>Blog table</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/table.css">
</head>

<body>
	<table>
		<caption>Induló kurzusaink</caption>
		<thead>
			<tr>
				<th id="tanfolyam-kurzusok" scope="col" rowspan="2">Tanfolyam</th>
				<th id="datumok" scope="col" colspan="2">Dátuma</th>

				<th scope="col" rowspan="2">Szabad helyek</th>
			<tr>
				<th headers="datumok" scope="col">Kezdés</th>
				<th headers="datumok" scope="col">Befejezés</th>
			</tr>
		</thead>
		<tbody> <!--	<tr>	
			<td data-label="Tanfolyam"></td>
			<td>Kezdés</td>
			<td>Befejezés</td>
			<td></td>
			</tr>-->
			<tr>
				<td data-label="Tanfolyam">Webtervezési alapok</td>
				<td data-label="Kezdés dátuma">2023.03.01</td>
				<td data-label="Befejezés dátuma">2023.05.01</td>
				<td data-label="Szabad helyek">8 fő</td>
			</tr>
			<tr>
				<td data-label="Tanfolyam">Webtervezési alapok</td>
				<td data-label="Kezdés dátuma">2023.03.01</td>
				<td data-label="Befejezés dátuma">2023.05.01</td>
				<td data-label="Szabad helyek">3 fő</td>
			</tr>
			<tr>
				<td data-label="Tanfolyam">Haladó webtervezés</td>
				<td data-label="Kezdés dátuma">2023.03.01</td>
				<td data-label="Befejezés dátuma">2023.07.01</td>
				<td data-label="Szabad helyek">5 fő</td>
			</tr>
			<tr>
				<td data-label="Tanfolyam">Haladó webtervezés</td>
				<td data-label="Kezdés dátuma">2023.03.01</td>
				<td data-label="Befejezés dátuma">2023.07.01</td>
				<td data-label="Szabad helyek">9 fő</td>
			</tr>
		</tbody>
	</table>
</body>

</html>