<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/plane.png" />
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost:3307','root','root','dbajax');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"dbajax");
$sql="SELECT * FROM informacione WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
	<tr>
		<th style='text-align:center;'>Emri i Agjensisë</th>
		<th style='text-align:center;'>Selia Kryesore</th>
		<th style='text-align:center;'>Oraret e Fluturimit</th>
		<th style='text-align:center;'>Eksperience Pune</th>
		<th style='text-align:center;'>Numri i pikëve në të gjithë botën</th>
	</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Emri_Agjensis'] . "</td>";
    echo "<td>" . $row['Selia_Kryesore'] . "</td>";
	echo "<td>" . $row['Oraret_e_Fluturimit'] . "</td>";
    echo "<td>" . $row['Eksperienca_Punes'] . "</td>";
    echo "<td>" . $row['NrQendraveNeBote'] . "</td>";
    echo "</tr>";
	}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>