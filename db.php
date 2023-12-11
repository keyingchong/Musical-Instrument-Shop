<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
try {
    $con = new PDO("mysql:host=localhost:3306;dbname=comtech", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
