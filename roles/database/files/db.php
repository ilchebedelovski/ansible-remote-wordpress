<?php

$connection = new PDO('mysql:host=localhost;dbname=demo', 'developer', 'developer');
$statement  = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn();
