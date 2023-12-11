<?php
  session_start();
  include 'db_config.php';
 
  //Table Ajax Jquery
  if(isset($_POST['operation']) && $_POST['operation'] == 'table') {

    $university = $_POST['university'];
    $course = $_POST['course'];
    $startMonth = $_POST['startMonth'];
    $startYear = $_POST['startYear'];
    $endMonth = $_POST['endMonth'];
    $endYear = $_POST['endYear']; 
    $totalYear = date('Y');

    $sql = "SELECT * FROM interns i JOIN university u ON i.uni_id = u.uni_id
    WHERE i.start_month IS NOT NULL ";

      if(!empty($_POST['university'])) {
        $sql .= "AND u.uni_name LIKE '%$university%' ";
      }
  
      if(!empty($_POST['course'])) {
        $sql .= "AND i.course LIKE '%$course%' ";
      }
  
      if(!empty($_POST['startMonth']) && !empty($_POST['startYear']) && !empty($_POST['endMonth']) && !empty($_POST['endYear'])) {
        $sql .= "AND i.start_month >= '$startYear-$startMonth-1' AND i.start_month <= '$endYear-$endMonth-31 23:59:59.999' ";
      }
  
      $sql .= "GROUP BY i.intern_id  ORDER BY i.start_month ASC";

      $result = mysqli_query($con, $sql);   
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr id='" . $row['intern_id'] . "'>";
          echo "<td class='col-1' style='text-align:left;'>" . (empty($row['name']) ? "-" : htmlspecialchars($row['name'])) . "</td>";
          echo "<td class='col-sm-2' style='text-align:left'>" . (empty($row['course']) ? "-" : htmlspecialchars($row['course'])) . "</td>";
          echo "<td class='col-sm-1' style='text-align:center'>" . (empty($row['start_month']) ? "-" : date("M Y", strtotime($row['start_month']))) . "</td>";
          echo "<td class='col-sm-1' style='text-align:left'>" . (empty($row['uni_name']) ? "-" : htmlspecialchars($row['uni_name'])) . "</td>";
          echo "<td class='col-sm-3' style='text-align:left'>" . (empty($row['description']) ? "-" : htmlspecialchars($row['description'])) . "</td>";
      
      }
      } 
      else {
        echo "<tr>";
        echo "<td colspan='10' class='no-record'>No More Record</td>";
        echo "</tr>";
      }
    }
//script for prevent excel export the script
?>


