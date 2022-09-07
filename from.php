
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
                <input type="password" class="input" name="password" required>
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
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check" required>
                    <input type="checkbox">
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
    $servername = "localhost";
    $username ="root";
    $password = "";
    $database ="project";

    $con = mysqli_connect($servername,$username,$password,$database);
    if($_POST["register"])
    {
        $f_name   =$_POST['fname'];
        $l_name   =$_POST['lname'];
        $phone    =$_POST['phone'];
        $email    =$_POST['email'];
        $password =$_POST['password'];
        $gender   =$_POST['gender'];
        $address  =$_POST['address'];

       $query = "INSERT INTO project VALUES('$f_name','$l_name','$phone','$email','$password','$gender','$address')";

       $data = mysqli_query($con,$query);
     
       if($data)
       {
        echo "<script>alert('Success!');</script>";

       }
       else 
       {
         echo "No".mysqli_connect_error();

     }
    if($con)
    {
        //   echo "Connected";
    }
    else
    {
        echo "Not Connected";
    }
}
?>