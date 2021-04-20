<?php
echo("jestes w delete.php <br>");
echo $_POST['id'];

require_once("../connect.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "DELETE FROM skl_artykul WHERE id_artykul=".$_POST['id'];

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>