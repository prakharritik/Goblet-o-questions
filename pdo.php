<?php
    $HOST = getenv('host');
    $PORT = 26257;
    $DB_NAME = getenv('dbname');
    $DB_USER = 'prakhar';
    $DB_PASSWORD = getenv('password');
    $pdo = new PDO(
        //"mysql:host=$HOST;port=$PORT;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD
        "pgsql:host=$HOST;port=$PORT;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    