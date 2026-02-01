<?php
$host = "34.58.246.93";
$user = "stud8911";
$pass = "Uwb123!!";
$db = "studXXXXX"; // PODMIEŃ NA SWÓJ DB_NAME

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "SELECT tekst FROM dane";
$result = $conn->query($sql);

echo "<h1>Dane z bazy danych:</h1>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Wpis: " . $row["tekst"] . "<br>";
    }
} else {
    echo "Brak danych.";
}
$conn->close();
?>
