<?php
session_start();
// require 'connect.php';
include 'db_config.php';
$_SESSION['year'] = $_GET['year'];
$year = date('Y');
$sql = "SELECT DISTINCT(YEAR(start_month)) as cd FROM interns
WHERE course is NOT NULL";
$result = mysqli_query($con, $sql);
$y = array();
while($row = mysqli_fetch_array($result)) {
    $y[] = $row['cd'];
}

$yr = max($y);

//user have to log in
if (empty($_SESSION['userID']) || empty($_SESSION['level']) || empty($_SESSION['branchID'])) {
    echo "<script>";
    // echo "alert('No Session Detected');";
    echo "window.location.href = 'login.php';";
    echo "</script>";
    exit();
}

//user have to log in
if (empty($_SESSION['year'])) {
    echo "<script>";
    echo "window.location.href = 'createIntern.php?year=".$yr."';";
    echo "</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Intern</title>
</head>
<body>
    <h1>Create Intern</h1>
    
    <form action="addIntern.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="start_month">Start Month:</label>
        <input type="date" id="start_month" name="start_month" required>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>

        <label for="university">University:</label>
        <select id="university" name="university">
            <option value="">Select University</option>
            <?php
                // Fetch existing universities from the database
                // Assume you have a connection to the database ($con)
                $sql = "SELECT * FROM university ORDER BY uni_id";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['uni_id'] . "'>" . $row['uni_name'] . "</option>";
                }
            ?>
        </select>

        <label for="new_university">or Create a New University:</label>
        <input type="text" id="new_university" name="new_university">

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
