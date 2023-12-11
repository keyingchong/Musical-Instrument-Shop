<?php

session_start();
require 'db.php';

if (empty($_SESSION['branchID'])) {
    echo "<script>";
    echo "alert('No Session Detected.');";
    echo "window.location.href='LogOutForm.php';";
    echo "</script>";
    exit();
}

function scriptError($id, $message) {
    return "document.getElementById('$id').innerHTML='$message';";
}

if (isset($_POST['operation']) && $_POST['operation'] == "createIntern") {

    $name = $_POST['name'];
    $start_month = $_POST['start_month'];
    $course = $_POST['course'];
    $university = $_POST['university'];
    $description = $_POST['description'];


    $error = array(
        "name" => array("id" => "nameErr", "error" => ""),
        "course" => array("id" => "courseErr", "error" => ""),
        "start_month" => array("id" => "startmonthErr", "error" => ""),
        "university" => array("id" => "universityErr", "error" => ""),
        "description" => array("id" => "descriptionErr", "error" => ""),
        "image" => array("id" => "createImageErr", "error" => "")
    );
    $errFound = false;

    if (!empty($_FILES['file'])) {
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if ($fileExt != "png" && $fileExt != "jpg" && $fileExt != "jpeg") {
            $error['image']['error'] .= " * Must be PNG, JPG, JPEG . <br>";
            $errFound = true;
        }

        if ($fileSize > 50000000) {
            $error['image']['error'] .= " * Must be below 50mb . <br>";
            $errFound = true;
        }

        if ($fileError != 0) {
            echo "<script>";
            echo "alert('File Upload error occured, try again later.');";
            echo "window.location.href='SourceDetails.php';";
            echo "</script>";
            exit();
        }
    }

    if (empty($name)) {
        $error['name']['error'] .= " * Required. <br>";
        $errFound = true;
    }

    if (strlen($name) > 255) {
        $error['name']['error'] .= " * Required. <br>";
        $errFound = true;
    }

    
    if (empty($course)) {
        $error['course']['error'] .= " * Required. <br>";
        $errFound = true;
    }

    if (strlen($course) > 255) {
        $error['course']['error'] .= " * Required. <br>";
        $errFound = true;
    }

    if (empty($university)) {
        $error['university']['error'] .= " * Required. <br>";
        $errFound = true;
    }

    if (strlen($university) > 255) {
        $error['university']['error'] .= " * Required. <br>";
        $errFound = true;
    }

    
    if (empty($description)) {
        $error['description']['error'] .= " * Required. <br>";
        $errFound = true;
    }

    if (strlen($university) > 255) {
        $error['description']['error'] .= " * Required. <br>";
        $errFound = true;
    }


    if ($errFound) {
        $script = "";
        foreach ($error as $label) {
            $script .= "document.getElementById('" . $label['id'] . "').innerHTML = '" . $label['error'] . "';";
        }

        echo "<script>";
        echo "messagePopUp('Invalid Input');";
        echo $script;
        echo "</script>";
    } else {
        $sql = "INSERT INTO interns(name, contact, guid, img, branch_id, createon_date) " .
                "VALUES(:name, :contact, :guid, :img, :branch_id, :createon_date)";

        $stmt = $con->prepare($sql);

        $currentDate = date("Y-m-d H:i:s");
        $guid = GUID();

        if (!empty($_FILES['file'])) {
            $image_base64 = base64_encode(file_get_contents($fileTmpName) );
            $image = 'data:image/'.$fileExt.';base64,'.$image_base64;
        }
        else {
            $image_base64 = base64_encode(file_get_contents("photo/bg.jpg") );
            $image = 'data:image/jpg;base64,'.$image_base64;
        }
        
        
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":contact", $contact);
        $stmt->bindParam(":guid", $guid);
        $stmt->bindParam(":img", $image);
        $stmt->bindParam(":branch_id", $_SESSION['branchID']);
        $stmt->bindParam(":createon_date", $currentDate);

        try {
            $stmt->execute();
            echo "<script>";
            echo "window.location.href= 'SourceDetails.php?message=Create Successful';";
            echo "</script>";
        } catch (Exception $e) {
            //echo $e->getMessage();
            echo "<script>";
            echo "alert('Create Failed, try again later');";
            echo "window.location.href = 'LogOutForm.php';";
            echo "</script>";
            exit();
        }
		
		//====================================== add to activityLog database =======================================
        $lastID = $con->lastInsertId();
        $currentDate = date("Y-m-d H:i:s");
        $activity_type = "create";
        $table_affected = "campaign";
        $table_row_id = $lastID;

        // get username
        $sql = "SELECT name FROM users WHERE user_id = :user_id";
        $stmt3 = $con->prepare($sql);
        $stmt3->bindParam(":user_id", $_SESSION['userID']);

        try {
            $stmt3->execute(); // get username

            if (count($stmt3->fetchAll()) > 0) {
                $stmt3->execute();
                $row2 = $stmt3->fetch();
            }
        } catch (Exception $e) {
            echo "<script>";
            echo "alert('SQL error, try again later');";
            echo "window.location.href = 'index.php';";
            echo "</script>";
            exit();
        }

        $desc = $name . " is created";
        $desc .= ". (Edited by " .  $row2['name'] . ")";

        $stmt2 = $con->prepare(
            "INSERT INTO activitylog (activity_desc, activity_datetime, branch_id, user_id, activity_type, table_affected, table_row_id) " .
                "VALUES (:activity_desc, :activity_datetime, :branch_id, :user_id, :activity_type, :table_affected, :table_row_id)"
        );

        $stmt2->bindParam(":activity_desc", $desc);
        $stmt2->bindParam(":activity_datetime", $currentDate);
        $stmt2->bindParam(":branch_id", $_SESSION['branchID']);
        $stmt2->bindParam(":user_id", $_SESSION['userID']);
        $stmt2->bindParam(":activity_type", $activity_type);
        $stmt2->bindParam(":table_affected", $table_affected);
        $stmt2->bindParam(":table_row_id", $table_row_id);

        try {
            $stmt2->execute();
            echo "<script>";
            echo "window.location.href='SourceDetails.php?message=Create Successfully';";
            echo "</script>";
        } catch (Exception $e) {
            echo "<script>";
            echo "alert('SQL error in tracking operation, try again later');";
            //echo $e->getMessage();
            echo "window.location.href = 'login.php';";
            echo "</script>";
            exit();
        }
        //==========================================================================================================

    }
} else {
    echo "<script>";
    echo "alert('Not Allowed to be here.');";
    echo "window.location.href='LogOutForm.php';";
    echo "</script>";
    exit();
}