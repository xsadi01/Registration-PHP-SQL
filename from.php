<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    
    <div class="container">
    <form method="POST">
        <div class="title">
        Refistration Form
        </div>
        <div class="form">
        <div class="input_field">
                <label>Photo</label>
                <input type="file" name="avater">
            </div>
            <div class="input_field">
                <label>Firat Name</label>
                <input type="text" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>
            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" required>
            </div>
            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="pwd" required>
            </div>
            <div class="input_field">
                <label>Gender</label>
                <select class="custom_select" name="gender">
                    <option value="not_selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="addr" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to Terms and Conditions.</p>    
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
            </form> 
        </div>
       
</body>
</html>

<?php
error_reporting(0);
    if($_POST["register"])
    {
        $avater   =$_POST['avater'];
        $f_name   =$_POST['fname'];
        $l_name   =$_POST['lname'];
        $phone    =$_POST['phone'];
        $email    =$_POST['email'];
        $password =$_POST['pwd'];
        $gender   =$_POST['gender'];
        $address  =$_POST['addr'];

        if($avater != "" && $f_name != "" && $l_name != "" && $phone != "" && $email != "" && $password != "" && $gender != "" && $address != "")
        {

       $query = "INSERT INTO project VALUES('$avater','$f_name','$l_name','$phone','$email','$password','$gender','$address')";

       $data = mysqli_query($con,$query);
     
       if($data)
       {
        echo "Data Added Successfully!";
       }
       else 
       {
         echo "No".mysqli_connect_error();
       }
    }
    else
    {
        echo "Please Fill the Form"; 
    }   
    }
?>
