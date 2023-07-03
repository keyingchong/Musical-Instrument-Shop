<!DOCTYPE html>  
<html>  
<head>
 <title>Payment Details</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/navigation.css">
    <link rel="stylesheet" href="../styles/payment.css">
    <link rel="stylesheet" href="../styles/includes.css"> 
<style>  
.error {color: #FF0001;}  
</style> 
</head>  
<body>    
  <div class="payment-background">
  <?php include("../includes/navigation.php") ?>
  <?php  
$nameErr = $emailErr = $phoneErr = $addressErr = "";  
$name = $email = $phone = $address = "";  
  
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
       
		if (trim($_POST['address']) == "") {
            $addressErr = 'Please enter your delivery address<br/><br/>';
        } else {
			$address = input_data($_POST['address']);
		}
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h1 style="text-align:center;">Payment Details</h1>  
<span class = "error">* required field </span>  
<div class="payment-container">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >  
    Name:   
    <input type="text" name="name"> 	
    <span class="error">* <br><?php echo $nameErr; ?> </span>  
    <br>
    E-mail:   
    <input type="text" name="email">
    <span class="error">* <br><?php echo $emailErr; ?> </span>  
    <br>  
    Phone No:   
    <input type="text" name="phone">
    <span class="error">* <br><?php echo $phoneErr; ?> </span>  
    <br>    
    Delivery address:<br>
	<textarea name="address" style="border:3px solid rgb(59,2,90);border-radius:30px;width:100%;background:none;"></textarea>  
    <span class="error">* <br><?php echo $addressErr; ?> </span>  
    <br><br>                            
    <input type="submit" name="submit" value="Submit" class="payment-btn" >   
    <br><br>                             
</form>

<?php  
    if(isset($_POST['submit'])) {  
        if($nameErr == "" && $emailErr == "" && $phoneErr == "" && $addressErr == "") {  
            echo "<h3> <b>We have received your informations, we will contact you for futher payment.</b> </h3>";  
            echo "<h3>Your information:</h3>"; 
            echo "Name: " .$name;  
            echo "<br>";  
            echo "Email: " .$email;  
            echo "<br>";  
            echo "Phone: " .$phone;  
            echo "<br>";  
            echo "Delivery Address: " .$address; 
        } else {
            echo "<h3> Error </h3>";  
        }
    }
?> 
<br><br><br>
<?php include("../includes/info.php") ?>
  </div>
</body>  
</html>  