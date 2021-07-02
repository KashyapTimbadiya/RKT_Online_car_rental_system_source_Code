<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Reset Password</title>

    <style>
    body {
        background-image: url(photos/Yellow_car.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box {
        padding: 9%;
        background-color: white;
        opacity: 0.8;
    }

    .box1 {
        padding: 10%;
        background-color: #000000;
    }

    .box1 h2 {
        color: #f9ca24;
    }

    @media (max-width: 900px) {

        .box,
        .box1 {
            padding: 7%;
        }
    }

    a:hover {
        font-weight: bold;
    }
    </style>

</head>

<body>

    <form action="" method="post">
        <div class="box">
            <div class="box1">
                <h2 class="text-center">Reset Password</h2>
                <div class="mb-3">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Username"
                        name="username" maxlength="11" size="40px" autocomplete="off" required />
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="formGroupExampleInput2"
                        placeholder="Enter new Password" name="password" maxlength="10" size="50px" autocomplete="off"
                        required />
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="formGroupExampleInput2"
                        placeholder="Confirm new Password" name="confirm_password" maxlength="10" size="40px"
                        autocomplete="off" required />
                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-danger font-weight-bold"
                        style="background-color: #f9ca24; color:black;">confirm</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'config.php';
    $pass = $_POST["password"]; 
    $cpass = $_POST["confirm_password"];
    $user=$_POST["username"];
    

    $user="SELECT username FROM `users` WHERE username='$user'";
    $fire=mysqli_query($conn,$user);
    $rows=mysqli_num_rows($fire);
    if($rows==0)
    {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
          Username does not exists...
        </div>
      </div>';
    }
    else if($pass!=$cpass)
    {
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
        $query = "UPDATE `users` SET `password`='$pass' WHERE username='$user'";
        $result = mysqli_query($conn,$query);
        header('Location:signin.php');
    }
    
}
    
?>