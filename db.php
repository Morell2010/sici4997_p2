<?php
$dbHostname = 'localhost';
$dbDatabase = 'elvis_morell';
$dbUsername = 'elvis.morell';
$dbPassword = '4732';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);
function getResultFromSQL($sql, $values = []) {
    global $db;
    
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    
    return $stmt->fetchAll();
}
?>