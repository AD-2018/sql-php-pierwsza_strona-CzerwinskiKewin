<?php
echo("jestes w delautor.php <br>");
echo $_POST['id'];

require_once("../connect.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "DELETE FROM bibl_autor WHERE id_autor=".$_POST['id_autor'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "usunieto";
  header('Location: https://znw.herokuapp.com/ksiazki/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>