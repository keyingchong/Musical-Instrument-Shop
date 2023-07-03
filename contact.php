<!DOCTYPE html>  
<html>  
<head>
 <title>Contact Us</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/includes.css"> 
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  <div class="contact-background">
  <?php include("includes/navigation.php") ?>
  <?php  
$nameErr = $emailErr = $phoneErr = $subjectErr = "";  
$name = $email = $phone = $subject = "";  
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    if (empty(trim($_POST["name"]))) {  
         $nameErr = "Please fill in your name.";  
    } else {  
        $name = input_data($_POST["name"]);  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
       
    if (empty(trim($_POST["email"]))) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  

    if (empty(trim($_POST["phone"]))) {  
            $phoneErr = "Phone no is required";  
    } else {  
            $phone = input_data($_POST["phone"]);   
            if (!preg_match ("/^[0-9]*$/", $phone) ) {  
            $phoneErr = "Only numeric value is allowed.";  
            }  
        if (strlen ($phone) != 10) {  
            $phoneErr = "Phone no. must contain 10 digits.";  
            }  
    }  
       
		if (trim($_POST['subject']) == "") {
            $subjectErr = 'Please enter a description of your subject.<br/><br/>';
        } else {
			$subject = input_data($_POST['subject']);
		}
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h1 style="margin-left:350px;">Contact Us</h1>  
<span class = "error">* required field </span>  
<div class="contact-container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
      Name:<span class="error">* <br><?php echo $nameErr; ?> </span>
      <input type="text" name="name"> 	  
      <p>
      E-mail:<span class="error">* <br><?php echo $emailErr; ?> </span>  
      <input type="text" name="email">
      <p>  
      Phone No:<span class="error">* <br><?php echo $phoneErr; ?> </span>     
      <input type="text" name="phone">
      <p>   
      Subject:<span class="error">* <br><?php echo $subjectErr; ?> </span>
      <textarea name="subject" style="border:3px solid rgb(59,2,90);border-radius:30px;width:100%;background:none;"></textarea>    
      <p>                            
      <input type="submit" name="submit" value="Submit" class="contact-btn">   
      <br><br>                             
  </form>

  <div class="contact-img" style="margin-top:80px;">
  <img src="images/home2.jpeg">
  <div class="contact-content">
    <table class="contact-pg">
      <tr><th>Shop working hour</th></tr>
      <tr><td>Monday-Saturday (9AM-6PM)</td></tr>
      <tr><td>Sunday (Closed)</td></tr>
    </table>
    </div>
  </div>
</div>



<?php  
    if(isset($_POST['submit'])) {  
        if($nameErr == "" && $emailErr == "" && $phoneErr == "" && $subjectErr == "") {  
            echo "<h3> <b>We have recorded your enquiries.</b> </h3>";  
            echo "<h3>Your Input:</h3>"; 
            echo "Name: " .$name;  
            echo "<br>";  
            echo "Email: " .$email;  
            echo "<br>";  
            echo "Phone: " .$phone;  
            echo "<br>";  
            echo "Subject: " .$subject; 
        } else {
            echo "<h3> Error </h3>";  
        }
    }
?> 
      <br><br><br><br><br>
      <?php include("includes/info.php") ?>
      <?php include("includes/footer.php") ?>
      </div>  
  </div>
  
  </div>
</body>  
</html>  