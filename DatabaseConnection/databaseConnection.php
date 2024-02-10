<?php
class DatabaseConnection
{

    public function getConn()
    {
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'bharat-german';

        // Create a connection
        $conn = mysqli_connect($hostname, $username, $password, $database);
        return $conn;
    }
}