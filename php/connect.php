<?php
    define("servername", "localhost");
    define("username", "mikidani");
    define("password", "123456");
    define("dbname", "mikidani");

    $conn = new mysqli(constant("servername"),constant("username"),constant("password"),constant("dbname"));
?>