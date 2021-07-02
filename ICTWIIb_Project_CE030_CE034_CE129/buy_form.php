<?php
// Start the session and get the data
session_start();
?>
<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form_style.css">
    <link rel="stylesheet" media="screen and (max-width:640px)" href="css/buy.css">

    <title>Purchase</title>
</head>

<body>
    <div class="container">
        <h2>Purchase a Car</h2>
        <div class="form">
            <form action="" method="post">
                <div class="input">
                    <i class="fa fa-user icon user1"></i>
                    <input type="text" name="firstname" class="fname name" placeholder="Enter your first name" required>
                    <span>
                        <i class="fa fa-user icon user2"></i>
                        <input type="text" name="lastname" class="lname name" placeholder="Enter your last name"
                            required>
                    </span>
                </div>
                <div class="input">
                    <i class="fa fa-envelope icon mail"></i>
                    <input type="email" name="email" class="email text" placeholder="Enter your email" required>
                </div>
                <div class="input">
                    <i class="fa fa-lock icon password"></i>
                    <input type="password" name="password" class="password text" placeholder="Enter your password"
                        required>
                </div>
                <div class="input">
                    <i class="fa fa-mobile icon phone"></i>
                    <input type="text" name="mobile" class="mobile text" maxlength="10"
                        placeholder="Enter your mobile number" required>
                </div>
                <div class="input g">
                    <label for="gender">Gender :</label>
                    <input type="radio" name="gender" value="male" class="radio">
                    <label for="male" class="gender">Male</label>
                    <input type="radio" name="gender" value="female" class="radio">
                    <label for="female" class="gender">Female</label>
                </div>
                <div class="input S">
                    <label for="state">Select your State :</label>
                    <select class="state" name="state" required>
                        <option value="Gujrat">Gujrat</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Goa">Goa</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Bengluru">Bengluru</option>
                        <option value="Tamilnadu">Tamilnadu</option>
                        <option value="Karnataka">Karnataka</option>
                    </select>
                </div>
                <div class="input S">
                    <label for="car">Car choice for Purchase :</label>
                    <select class="car" name="car" required>
                        <option value="EECO">EECO</option>
                        <option value="Alto">Alto</option>
                        <option value="i20">i20</option>
                        <option value="Xcent">Xcent</option>
                        <option value="Honda-city">Honda-city</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Altroz">Altroz</option>
                        <option value="Yodha-pickup">Yodha-pickup</option>
                        <option value="Fortuner">Fortuner</option>
                        <option value="Yarish">Yarish</option>
                        <option value="Kwid">Kwid</option>
                        <option value="Duster">Duster</option>
                    </select>
                </div>
                <div class="input">
                    <input type="checkbox" class="check" required>
                    <label for="tnc" class="tnc">I agree with Terms and Conditions.</label>
                </div>
                <div class="input">
                    <input type="submit" name="submit" class="btn" value="Ready to Purchase">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php 

if(isset($_POST['submit']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $mobile=$_POST['mobile'];
    $state=$_POST['state'];
    $gender=$_POST['gender'];
    $car=$_POST['car'];


    $username=$_SESSION['username'];
    $sql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_assoc($result))
    {
        if ($pass == $row['password'])
        { 
            $insert="insert into `buy_car`(first_name,last_name,email_id,mobile_no,gender,state,car_name) values('$fname','$lname','$email','$mobile','$gender','$state','$car')";
            $query=mysqli_query($conn,$insert);
            if($query)
            {
                $to ="".$email."";
                $subject="Hello ".$fname."";
                $message="Thanks for selecting RKT. You selected ".$car." car. You will be informed whenever it is available.";
                $header="From: dobariyatejas01@gmail.com";
                if(mail($to,$subject,$message,$header))
                {
                    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div style="color: white; text-align: center;">
                      thanks for coming...
                    </div>
                  </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div style="color: white; text-align: center;">
                        Mail not sent...
                        </div>
                    </div>';
                }
                
            }
        } 
        else
        {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div style="color: white; text-align: center;">
              Wrong password
            </div>
          </div>';
        }
    }    
}
?>