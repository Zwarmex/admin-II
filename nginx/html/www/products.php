<html>
<style>
    body {
           background-color: #d4c0b8;
           height: 100vh;
    }
    table,
    th,
    td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
    }
    a{
        text-decoration: none;
        color: black;
    }
</style>

<head>
<title>Catalogue WoodyToys</title>
</head>

<body>
<h1>Catalogue WoodyToys</h1>

<?php
$dbname = getenv('MARIADB_DATABASE');
$dbhost = getenv('MARIADB_HOST');
$dbuser = getenv('MARIADB_USER');
$dbpass = getenv('MARIADB_PASSWORD');
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
mysqli_select_db($connect,$dbname) or die("Could not open the database '$dbname'");
$result = mysqli_query($connect,"SELECT id, product_name, product_price FROM products");
?>

<table>
<tr>
    <th>Numéro de produit</th>
    <th>Descriptif</th>
    <th>Prix</th>
</tr>

<?
while ($row = mysqli_fetch_array($result)) {
    printf("<tr><th>%s</th> <th>%s</th> <th>%s</th></tr>", $row[0], $row[1],$row[2]);
}
?>

</table>
<br>
<button type="button"><a href="https://www.l1-3.ephec-ti.be">BACK</a></button>

</body>
</html>
