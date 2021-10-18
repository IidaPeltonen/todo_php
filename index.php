<?php
header('Access-Control-Allow-Origin:' 
header('Content-Type: application/json');

$db = new PDO('mysql:host=localhost;dbname=todo;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query = $db->query($sql);
$results  = $query->fetchAll(PDO::FETCH_ASSOC);
header('HTTP/1.1 200 OK');
print json_encode($results); 