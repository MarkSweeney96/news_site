<!--
Author: Mark Sweeney
Date: 2017-31-03
-->

<?php
class DB {

    const HOST     = "localhost";
    const DATABASE = "news";
    const USERNAME = "root";
    const PASSWORD = "";

    public static function getConnection() {

        $dsn = 'mysql:host=' . DB::HOST . ';dbname=' . DB::DATABASE;

        $connection = new PDO($dsn, DB::USERNAME, DB::PASSWORD);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }

}