<?php
//MySQL username.
$dbUser = 'root';
 
//MySQL password.
$dbPassword = '';
 
//MySQL host / server.
$dbServer = 'localhost';
 
//The MySQL database your table is located in.
$dbName = 'qlsv';
 
//Connect to MySQL database using PDO.
$pdo = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUser, $dbPassword);
 echo $pdo;
//Get the name that is being searched for.
$name = isset($_GET['st_name']) ? trim($_GET['st_name']) : '';
 
//The simple SQL query that we will be running.
$sql = "SELECT `st_id`, `st_name` FROM `tbl_student` WHERE `st_name` LIKE :st_name";
 
//Add % for wildcard search!
$name = "%$name%";
 
//Prepare our SELECT statement.
$statement = $pdo->prepare($sql);
 
//Bind the $name variable to our :name parameter.
$statement->bindValue(':st_name', $name);
 
//Execute the SQL statement.
$statement->execute();
 
//Fetch our result as an associative array.
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
//Echo the $results array in a JSON format so that we can
//easily handle the results with JavaScript / JQuery
echo json_encode($results);