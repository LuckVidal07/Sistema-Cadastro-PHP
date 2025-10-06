<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "empresa";
$conn = mysqli_connect($server, $user, $password, $dbname);
// Se a conexão falhar, garantimos que $conn é false, mas não fazemos 'echo'.
if (!$conn) {
    error_log("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>