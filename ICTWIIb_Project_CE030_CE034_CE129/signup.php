<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>

    <style>
    body {
        /* background-color: rgb(202, 153, 248); */
        background-image: url(photos/yellow_car.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box {
        padding: 7%;
        background-color: white;
        opacity: 0.8;
    }

    .height input {
        height: 30px;
    }

    .box1 {
        padding: 6%;
        background-color: #000000;
    }

    .box1 h2 {
        color: #f9ca24;
    }

    @media (max-width: 900px) {

        .box,
        .box1 {
            padding: 5%;
        }
    }
    </style>
</head>

<body>


    <form action="" method="post">
        <div class="box">
            <div class="box1">
                <h2 class="text-center">Registration</h2>
                <div class="mb-1 height ">
                    <input type="text" name="username" class="form-control" id="inputemail4"
                        placeholder="enter username" style="border-radius: 6px" maxlength="11" size="30px" required />
                </div>
                <div class="mb-1 height height">
                    <input type="email" name="email" class="form-control" id="inputemail" placeholder="enter email id"
                        style="border-radius: 6px" size="30px" required />
                </div>
                <div class="mb-1 height">
                    <input type="text" name="number" class="form-control" id="inputpassword4"
                        placeholder="enter mobile number" maxlength="10" style="border-radius: 6px" size="30px"
                        required />
                </div>
                <div class="mb-1 height">
                    <input type="password" class="form-control" name="password" placeholder=" enter password"
                        style="border-radius: 6px" maxlength="10" size="30px" required />
                </div>
                <div class="mb-1 height">
                    <input type="password" class="form-control" name="confirm_password" id="inputPassword"
                        placeholder="confirm password" style="border-radius: 6px" maxlength="10" size="30px" required />
                </div>
                <div class="mb-1 height">
                    <div>
                        <font color="white">Enter Birth date:</font>
                    </div>
                    <input type="date" class="date" name="bdate" style="border-radius: 4px" required />
                </div>
                <div class="mb-1 height">
                    <textarea name="address" class="form-control" cols="25" rows="5" placeholder="enter your address"
                        id="inputAddress2" style="border-radius: 6px"></textarea>
                </div>
                <div>
                    <input type="submit" value="submit" name="submit" ">
                    <button type=" reset" style="background-color: #f9ca24">Reset</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<?php

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $bdate=$_POST['bdate'];
    $address=$_POST['address'];

    $user="SELECT username FROM `users` WHERE username='$username'";
    $fire=mysqli_query($conn,$user);
    $rows=mysqli_num_rows($fire);
    if($rows>0)
    {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
          Username already exists...
        </div>
      </div>';
    }
    else if($password !=  $_POST['confirm_password']){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
          Password should match...
        </div>
      </div>';
    }
    else
    {
        $sql="INSERT INTO `users` (`username`, `password`, `email_id`, `mobile_no`, `address`, `date`) VALUES ('$username', '$password', '$email', '$number', '$address', '$bdate')";
    
        $result=mysqli_query($conn,$sql);
        if ($result)
        {
            header("location: signin.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
}
?>