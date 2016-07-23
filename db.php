<?php
$user = 'root';
$password = '2555';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=php_base', $user, $password);
    foreach($dbh->query('SELECT * from news') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}