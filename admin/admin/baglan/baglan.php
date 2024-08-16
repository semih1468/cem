<?php
try {
    $db = new PDO("mysql:host=localhost;charset=utf8;dbname=u524763606_new", "root", "");
    $db->exec('set names utf8');
} catch ( PDOException $e ){
    print $e->getMessage();
}
?>