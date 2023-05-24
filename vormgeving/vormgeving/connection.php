<?php
function connect()
    {
        try {
            $serveraddress = "localhost";
            $dbname = "databank_php";
            $username = "root";
            $password = "mysql";

            $conn = new PDO("mysql:host=$serveraddress;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>
