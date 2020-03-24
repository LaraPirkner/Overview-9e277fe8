<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="style.css">
    <title>database</title>
</head>
<body>

<h1>Welkom op het netland beheerderspaneel </h1>
<h2>Series</h2>
<div class="title">
<p class="text">Titel</p><p class="text">Rating</p>
</div>
<?php
include 'includes/connect.php';

/* Insert de informatie per row (repeated for each piece of info)*/
/*
$sql = "INSERT INTO films (Title, Duur) 
VALUES ('Sint', 85)";

$pdo->exec($sql);
*/

/*print de info*/
echo "<table>";
$data = $pdo->query("SELECT * FROM series")->fetchAll();
echo "<tr>";
foreach ($data as $row) {
    echo "<td>". $row['Title']. "</td>";
    echo "<td>" .$row['Rating']."</td>";
    echo "</tr>";
}
echo "</table>"
?>

<h2>Films</h2>
<div class="title">
<p class="text">Titel</p><p class="text">Duur</p>
</div>
<?php
echo "<table>";
$data = $pdo->query("SELECT * FROM films")->fetchAll();
echo "<tr>";
foreach ($data as $row) {
    echo "<td>". $row['Title']."</td>"; 
    echo "<td>". $row['Duur']."</td>";
    echo "</tr>";
}
echo "</table>"
?>

</body>
</html>

