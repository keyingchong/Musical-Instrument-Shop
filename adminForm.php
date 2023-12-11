<?php

session_start();
require('db.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $_SESSION['username'] = $_POST['username'];
    $password = $_POST['password'];
    $errFound = false;
    $loginErr = "";

    if (empty($username)) {
        $loginErr .= " * Username required.";
        $errFound = true;
    }
    if (empty($password)) {
        $loginErr .= " * Password required.";
        $errFound = true;
    }

    if (!$errFound) {
        $sql = "SELECT * FROM users WHERE username = :username AND users.deleteon_datetime IS NULL";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":username", $username);

        try {
            $stmt->execute();
            $userExist = count($stmt->fetchAll());
            if ($userExist > 1) { //just in case there are multiple same username
                echo "<script>";
                echo "alert('There is duplicate username, contact comtech2u communications for help');";
                echo "</script>";
                $loginErr .= " * There is duplicate username, contact comtech2u communications for help";
            } else if ($userExist == 1) {
                $stmt->execute();
                $row = $stmt->fetch();

                if (password_verify($password, $row['password'])) {
                    $_SESSION['level'] = $row['level'];
                    $_SESSION['userID'] = $row['user_id'];
                    $_SESSION['branchID'] = $row['branch_id'];

                    // $year = date('Y');
                    $year = 2023;
                    $datetime = date('Y-m-d H:i:s');
                    $id = $row['user_id'];
                    $sql2 = "UPDATE users SET lastlogin=? WHERE user_id=?";
                    $stmt2 = $con->prepare($sql2);
                    $stmt2->execute([$datetime, $id]);

                    // $year = date('Y');
                    
                    if($row['level'] == "Master Admin" || $row['level'] == "Management" || $row['level'] == "Super Manager"){
                        $sql = "SELECT DISTINCT(YEAR(start_month)) as cd FROM interns WHERE course IS NOT NULL";
                        $result = $con->query($sql);

                        $y = array();
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                            $y[] = $row['cd'];
                        }
                        $yr = max($y);
                        header("location: admin.php?year=$yr");
                    }elseif($row['level'] == "Manager"){
                        header("location: admin.php?year=$yr");
                    }else{
                        header("location: admin.php?year=$yr");
                    }
                } else {
                    $loginErr .= " * Username or password incorrect";
                }
            } else {
                $loginErr .= " * Username or password incorrect";
            }
        } catch (Exception $e) {
            echo "<script>";
            echo "alert('SQL error, try again later');";
            echo "</script>";
            $loginErr .= " * SQL error, try again later";
        }
    }

    if ($loginErr != "") {
        header("location: login.php?loginErr=$loginErr&username=$username");
    }
} else {
    header("location: login.php");
}
?>