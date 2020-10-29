<?php
$servername = "sql7.freemysqlhosting.net";
$username = "sql7373394";
$password = "35p8b2TQdP";
$dbname = "sql7373394#;

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $sql);

echo('<table border="1">');
echo('<th>Imie</th><th>zarobki</th>');

while($row=mysqli_fetch_assoc($result))
{
  echo('<tr>');
  echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>');
}

    echo('</table>');
?>
