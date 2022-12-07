<?php

$host = "localhost";
$db = "E-learning";
$username = "root";
$password = "root";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello</p>
<?php
var_dump($_POST['NamePOI']);
var_dump($_POST['Descriptionfield']);

$NamePOI = $_POST['NamePOI'];
$Descriptionfield = $_POST['Descriptionfield'];
$Minutes = $_POST['Minutes'];


$sql = "INSERT INTO Eleaning (name, minutes, Description) VALUES ('$NamePOI', '$Minutes', '$Descriptionfield')";
$stmt = $pdo->prepare($sql);
$stmt->execute();
header("Location: feed.html");
?>
</body>
</html>