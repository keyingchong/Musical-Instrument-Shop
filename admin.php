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
    echo "window.location.href = 'admin.php?year=".$yr."';";
    echo "</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styleList.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>

        tbody {
            display:block;
            max-height:600px;
            overflow-y:scroll;
            
        }
        thead, tbody tr {
            display:table;
            width:100%;
            /* table-layout:fixed; */
        }
        /* thead {
            width:200px; 
        } */
        tbody tr {
            width:100%;
        }
        

        /* button for show more records */
        .block {
            display: block;
            width: 100%;
            border: none;
            background-color: #00022e;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
            }

            .block:hover {
            background-color: #ddd;
            color: black;
            }
            
            /* Button for scroll to top */ 
            #myBtn {
                display: none;
                position: fixed;
                bottom: 10px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: red;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
                }

                #myBtn:hover {
                background-color: #555;
                }

        .filterButton {
            position: fixed;
            top: 80px;
            right: 30px;
            z-index: 50;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        

        .printExcel{
            border: 2px solid green;
            outline:none;
            color: green;
            background: transparent;
            padding: 5px 13px;
            font-size: 13px;
            display: inline-block;
            margin: 5px 0px;
            cursor: pointer;
        }

        .printExcel:hover{
            color: white;
            background: green;
            transition-duration: .2s;
        }

        /* ========================================================================================= */

        .faRegisterDate, .faNumberOfCount {
        position: relative; 
        }

        .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: #00022e;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 10px 0;
        
        /* Position the faContact */
        position: absolute;
        z-index: 1;
        bottom: 100%;
        left: 50%;
        margin-left: -60px;
        margin-bottom: 5px;
        }

        .faRegisterDate .tooltiptext::after, .faNumberOfCount .tooltiptext::after{
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: black transparent transparent transparent;
        }

        .faRegisterDate:hover .tooltiptext, .faNumberOfCount:hover .tooltiptext{
        visibility: visible;
        }

        .faEmail .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: black transparent transparent transparent;
        }

        .faEmail:hover .tooltiptext {
        visibility: visible;
        }

        #outPopUp {
            display:none;               
            position: fixed;
            width: 30rem;
            height: 200px;
            z-index: 15;
            top: 50%;
            left: 50%;
            margin: -100px 0 0 -150px;
            background: #00022e;
            border-radius: 5px;
        }

        .counts {
        position: relative;

        }

        .tdPop {
        visibility: hidden;
        width: 600px;
        height: 200px;
        background-color: #00022e;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        bottom: 120%;
        left: -205%;
        margin-left: -60px;
        }

        .counts .tdPop::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 75%;
        width:10px;
        margin-left: -15px;
        border-width: 5px;
        /* border-style: solid;
        border-color: black transparent transparent transparent; */
        }

        .counts:hover .tdPop {
        visibility: visible;
        }

        input{
            outline: none;
            border: none;
            
        }
        .multi-selector{
            width: max-content;
        }
        .select-field{
            border: 1px solid rgb(187, 187, 187);
           
        }
        .select-field,.task,.list{
            width: 100%;
            background-color: white;
            padding: 0.3rem;
        }
        .list{
            box-shadow: 0 30px 60px rgb(0,0,0,0.2);
            display: none;
        }
        .down-arrow{
            font-size: 1.2rem;
            display: inline-block;
            cursor: pointer;
            transition: 0.2s linear;
        }
        .task{
            display: block;
            padding-left: 0;
        }

        .show{
            display: block;
        }
        .rotate180{
            transform: rotate(-60deg);
        }

        /* Multiselect for checkbox */
        /* .multiselect {
        width: 25rem;
        } */

        .selectBox {
        position: relative;
        width:20rem;
        }

        .selectBox select {
        width: 100%;
        font-weight: bold;
        }

        .overSelect {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        }

        #checkboxes {
        display: none;
        /* border: 1px #dadada solid; */
        margin-left: 1rem;
        /* position: absolute;
        z-index: 1; */
        }

        #checkboxes label {
        display: block;
        }

        #checkboxes label:hover {
        background-color: #1e90ff;
        }

        /* The Modal (background) */
        .modal {
        /* display: block; Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
        /* background-color: black; */
        margin: auto;
        padding: 40px;
        border: 1px solid #888;
        width: 70%;
        height: 85%;
        }

        /* The Close Button */
        .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <div id="ass"></div>
    <?php include("FoottHead/head.php"); ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }
        </script>


            <div id="layoutSidenav_content">
                
                <main>
                    
                    <div class="container-fluid px-4">
                    <!-- Modal button -->
                    <button class="filterButton" onclick="document.getElementById('modal').style.display = 'block';document.getElementById('layoutSidenav_content').disabled = true;" hidden>asdasdasd</button>
                        <h1 class="mt-4" style="color: white;">Comtech2U Web Content</h1>
                
                        <br>
                        </div>

                        <div class="card mb-4" style="background-color: #00022e;color: white;">
                            <div class="card-header" >
                                <i class="fas fa-table me-1"></i>
                                Interns Details
                            </div>
                            <div class="card-body" style="background-color: #34394b;">    
                            <?php
                            $sql = "SELECT * FROM university";
                            $res = mysqli_query($con, $sql);
                            ?>

                            
                            <!-- All Filtering -->
                            <!-- ====================================================================================================================================== -->
                            <!-- First row filtering ================================================================================================================== -->
                            <div class="row">

                            <div class="col-4">
                                    <!-- Source Filtering[campaign_id] -->
                                    <label style="margin-left:1rem;">University :</label>
                                    <br>
                                    <select id="university" name="university" style="border-radius:5px" onchange="queryFil();cntAjax();updateBarChart();countRaw()" form="exportExcel">
                                        <option value=''>All</option>
                                        <?php
                                            $sql = "SELECT uni_name FROM university ORDER BY uni_id";
                                            $result = mysqli_query($con, $sql);
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="'.$row['uni_name'].'">'.$row['uni_name'].'</option>';
                                            }
                                        ?>                                  
                                    </select>
                                </div>

                                <div class="col-4">
                                    <!-- Date of registration Filtering[...] -->
                                    <label style="margin-left:1rem;">Month-Year :</label>
                                    <br>
                                    
                                    <!-- Start Date -->
                                    <div style="display: flex;width:25rem">
                                        <?php
                                            $monthArr = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

                                            //Year
                                            $oldYear = 2020;
                                        ?>
                                        <select style="width:10rem;" id="startMonth" name="startMonth" onchange="queryFil();cntAjax();updateBarChart();countRaw()" form="exportExcel">
                                            <?php
                                                for($i = 0; $i < count($monthArr); $i++) {                                                   
                                                    echo '<option value="'. ($i+1) .'">'.$monthArr[$i].'</option>';                                                    
                                                }                                           
                                            ?>
                                        </select>
                                        
                                       

                                        <select style="width:10rem;" id="startYear" name="startYear" onchange="changeEnd()" form="exportExcel">
                                            <?php                                               
                                                for($i = $oldYear; $i <= date('Y'); $i++) {
                                                    if($i == date('Y')) {
                                                        echo '<option value="'. $i .'" selected>'.$i.'</option>';
                                                    } else {
                                                        echo '<option value="'. $i .'">'.$i.'</option>';
                                                    }
                                                }                                           
                                            ?>
                                        </select>
                                        
                                        
                                        <h style="margin-left:1rem;">to</h>

                                        <!-- End Date -->
                                        <?php
                                            $mon = date("m");
                                        ?>
                                        <select style="width:10rem;" id="endMonth" name="endMonth" onchange="queryFil();cntAjax();updateBarChart();countRaw()" form="exportExcel">
                                            <?php
                                                for($i = 0; $i < count($monthArr); $i++) {
                                                    if($i + 1 == $mon) {
                                                        echo '<option value="'. ($i+1) .'" selected>'.$monthArr[$i].'</option>';
                                                    } else {
                                                        echo '<option value="'. ($i+1) .'">'.$monthArr[$i].'</option>';
                                                    }
                                                }                                           
                                            ?>
                                        </select>
                                        <select style="width:10rem;" id="endYear" name="endYear" onchange="queryFil();cntAjax();updateBarChart();countRaw()" form="exportExcel">
                                            <?php                                               
                                                for($i = $oldYear; $i <= date('Y'); $i++) {
                                                    if($i == date('Y')) {
                                                        echo '<option value="'. $i .'" selected>'.$i.'</option>';
                                                    } else {
                                                        echo '<option value="'. $i .'">'.$i.'</option>';
                                                    }
                                                }                                           
                                            ?>
                                        </select>
                                        
                                    </div>
                                    <br>
                                </div>



                                <div class="col-4">
                                    <!-- Gender Filtering[gender] -->
                                    <label style="margin-left:1rem;">Course :</label>
                                    <br>
                                    <select id="course" name="course" style="border-radius:5px" onchange="queryFil();cntAjax();updateBarChart();countRaw()" form="exportExcel">
                                        <option value=''>All</option>
                                        <?php
                                            $sql = "SELECT course FROM interns GROUP BY course";
                                            $result = mysqli_query($con, $sql);
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="'.$row['course'].'">'.$row['course'].'</option>';
                                            }
                                        ?>                                  
                                    </select>
                                </div>

                                
                                

                            </div>   
                                                  

                            <!-- ======================================================================================================================================= -->
                            
                            <!-- ========================================  Onchange when select got value using Ajax  ================================================== -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                                <br>
                                <br>    

                            <?php 
                                include 'db_config.php';

                                $sql = "SELECT * FROM interns";

                                $result = mysqli_query($con, $sql);
                                $counts = mysqli_num_rows($result);
                                            
                            ?>
                            <!-- <input type="text" id="testss" style="float:right" placeholder="sdasd...." /> -->


                            <br>

                                
                                <!-- The Pop Up Modal -->
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content" >
                                    <span class="close" style="text-align:right;">&times;</span>
                                    <!-- <p style="color:black" id="popTitle">Some text in the Modal..</p> -->
                                    <div id="divPop" style="display:block;"></div>
                                    <div id="divPopLoading" style="margin-top:10rem;display:none">
                                        <img src="../photo/loading.gif" style="display:block;margin-left:auto;margin-right: auto;width:10%;">
                                    </div>
                                    </div>

                                </div>
                          
                        
                            <table class="table table-hover" style="color:white;border-style:solid;border-radius:5px;border:1px solid white"> 
                                                <thead style="background-color:#34344b;">
                                                    <tr>
                                                        <th class='col-1'>Name</th>
                                                        <th class='col-sm-2'>Course</th>
                                                        <th class='col-sm-1'>Date</th>
                                                        <th class='col-sm-1'>University</th>
                                                        <th class='col-sm-3'>Description</th>
                                                    </tr>
                                                </thead>
       
                                                <tbody id="comments">
                                                <?php
                                                // include 'db_config.php';                                                   
                                                    $nowYear = date('Y');
                                                    $sql = "SELECT * FROM interns i JOIN university u ON i.uni_id = u.uni_id
                                                    WHERE YEAR(i.start_month) = $nowYear
                                                    GROUP BY i.intern_id
                                                    ORDER BY i.start_month ASC
                                                    LIMIT 10";
 
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
                                                        $customerId = $row['intern_id'];

                                                       $createDate = $row['start_month'];
														$createDate = date('Y-m-d', strtotime($createDate));             
                                                    }
                                                    } 
                                                    else {
                                                    echo "0 results";
                                                    }
                                                    $con->close();
                                                    ?>

												</tbody>

												</table>
                                                          
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        
        
        <script src="js/scripts.js"></script>
        <script>
        //Set the offset value to 0
        var offset = 0;
        
        var showButton = document.getElementById("showMore");
        var countInput = document.getElementById("countAjax").value;
        if(countInput <= 50) {
            showButton.style.display = 'none';
        }

        //Business Unit Filtering
        var expanded = false;

			

        //======================================================================================================================
            //Ajax function for changing the table data
            //redirect to adminAjax.php
            function queryFil(){
                
                var university = document.getElementById("university").value;
                var course = document.getElementById("course").value;
                var startMonth = document.getElementById("startMonth").value;
                var startYear = document.getElementById("startYear").value;
                var endMonth = document.getElementById("endMonth").value;
                var endYear = document.getElementById("endYear").value;
                
                $.ajax({ 
                    url:"adminAjax.php",
                    method: "POST",
                    data:{
                        operation: "table",
                        university : university,
                        course: course,
                        startMonth: startMonth,
                        startYear: startYear,
                        endMonth: endMonth,
                        endYear: endYear

                    },
                    success:function(data){
                        offset = 0;
                        $("#comments").html(data);                        
                    }
                })
            };

 
            function changeEnd() {
                var university = document.getElementById("university").value;
                var course = document.getElementById("course").value;
                var startMonth = document.getElementById("startMonth").value;
                var startYear = document.getElementById("startYear").value;
                var endMonth = 12;
                var endYear = startYear;
                $("#endYear").val(startYear);
                $("#endMonth").val(12);
                $("#selectYear").html("Year : " + startYear);

                //table
            $.ajax({ 
                url:"adminAjax.php",
                method: "POST",
                data:{
                    operation: "table",
                    university : university,
                    course: course,
                    startMonth: startMonth,
                    startYear: startYear,
                    endMonth: endMonth,
                    endYear: endYear

                },
                success:function(data){
                    offset = 0;
                    $("#comments").html(data);                        
                }
            });

            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the <span> element that closes the modal
            var close = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            close.onclick = function() {
            modal.style.display = "none";
            }
            }

    </script>
    </body>
</html>