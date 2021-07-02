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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- css styles -->
    <link rel="stylesheet" href="css/form_style.css">
    <link rel="stylesheet" media="screen and (max-width:640px)" href="css/rent.css">

    <title>Rent</title>
</head>

<body>
    <div class="container">
        <h2>Rent Info</h2>
        <div class="form">
            <form action="" method="POST">
                <div class="input">
                    <i class="fa fa-user icon user1"></i>
                    <input type="text" name="firstname" class="fname name" placeholder="Enter first name" required>
                    <span>
                        <i class="fa fa-user icon user2"></i>
                        <input type="text" name="lastname" class="lname name" placeholder="Enter last name" required>
                    </span>
                </div>
                <div class="input">
                    <i class="fa fa-envelope icon password"></i>
                    <input type="email" name="email" class="password text" placeholder="Enter your email" required>
                </div>
                <div class="input">
                    <i class="fa fa-lock icon password"></i>
                    <input type="password" name="password" class="password text" placeholder="Enter your password"
                        required>
                </div>
                <div class="input">
                    <i class="material-icons icon date">date_range</i>
                    <input type="date" name="journeydate" class="text" required>
                </div>
                <div class="input">
                    <i class="material-icons icon time1i">timer</i>
                    <input type="time" class="text time1" required>
                    <span class="p">To</span>
                    <span class="timer">
                        <i class="material-icons icon time2i">timer</i>
                        <input type="time" class="text time2" required>
                    </span>
                </div>
                <div class="input S">
                    <label for="state">Place of your Journey :</label>
                    <select class="state1" name="state" required>
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
                <div class="input P">
                    <label for="payment">Select Payment Method :</label>
                    <select class="payment" name="paymentmethod" required>
                        <option value="PhonePe">PhonePe</option>
                        <option value="GooglePe">GooglePe</option>
                        <option value="Paytm">Paytm</option>
                    </select>
                </div>
                <div class="input">
                    <input type="checkbox" required>
                    <label for="tnc" class="tnc">I agree with Terms and Conditions.</label>
                </div>
                <div class="input">
                    <input type="submit" name="submit" type="submit" class="btn" value="Book Now">
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
    $bdate=$_POST['journeydate'];
    $state=$_POST['state'];
    $payment=$_POST['paymentmethod'];


    $username=$_SESSION['username'];
    $sql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_assoc($result))
    {
        if ($pass == $row['password'])
        { 
            $insert="insert into `rent_car`(first_name,last_name,journey_date,state,payment_method) values('$fname','$lname','$bdate','$state','$payment')";
            $query=mysqli_query($conn,$insert);
            if($query)
            {
                $to ="".$email."";
                $subject="Hello ".$fname."";
                $message="Thanks for selecting RKT. Car will be delivered on time.";
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
            <div>
              Wrong password
            </div>
          </div>';
        }
    }    
}
?>