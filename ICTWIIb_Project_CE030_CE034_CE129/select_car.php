<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- my css -->
    <link rel="stylesheet" href="css/car.css">

</head>

<body>
    <!-- navigation bar -->
    <?php include "navigation_bar.php" ?>


    <?php
    $company_id=$_GET['cid'];
    $select="SELECT * FROM `car_details` WHERE same_id=$company_id and temp_id=1";
    $query=mysqli_query($conn,$select);
    while($result=mysqli_fetch_array($query)){

        $pic=$result["image"];
        $carname=$result["car_name"];
        $lowprice=$result["low_price"];
        $highprice=$result["high_price"];
        $carengie=$result["engine"];
        $carbhp=$result["bhp"];
        $carseat=$result["seat"];
        $carmileage=$result["mileage"];
        $carfeature1=$result["feature1"];
        $carfeature2=$result["feature2"];
        $carfeature3=$result["feature3"];
        $carfeature4=$result["feature4"];
        
        echo '<div class="main-coin">
        <div class="container-1">
            <div class="box1">
                <div class="mini1"><img src="'.$pic.'" alt=""></div>
                <div class="mini2">
                    <div class="car-name">'.$carname.'</div>
                    <div class="car-price">&#8377 '.$lowprice.'- &#8377 '.$highprice.'</div>
                    <div class="lines">
                        <span class="material-icons icon">
                            directions_car_filled
                        </span> Engine: '.$carengie.'
                    </div>
                    <div class="lines">
                        <span class="material-icons">
                            bolt
                        </span> BHP: '.$carbhp.'
                    </div>
                    <div class="lines">
                        <span class="material-icons">
                            airline_seat_recline_normal
                        </span> Seating Capacity: '.$carseat.'
                    </div>
                    <div class="lines">
                        <span class="material-icons">
                            speed
                        </span> Mileage: '.$carmileage.'
                    </div>
                    <div class="lines">
                        <button><a href="rentalform.php
                        " style="text-decoration: none; color: black;">Rent Car</a></button>
                    </div>
                </div>
            </div>
            <div class="box2">
                <div class="features">
                    <i class="fas fa-thumbs-up fa-1x"></i>Top Features
                </div>
                <div>
                    <ul class="fea">
                        <span class="one">
                            <span>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature1.'</li>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature2.'</li>
                            </span>
                            <span>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature3.'</li>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature4.'</li>
                            </span>
                        </span>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
    }
    ?>
    <?php
    $company_id=$_GET['cid'];
    $select="SELECT * FROM `car_details` WHERE same_id=$company_id and temp_id=2";
    $query=mysqli_query($conn,$select);
    while($result=mysqli_fetch_array($query)){

        $pic=$result["image"];
        $carname=$result["car_name"];
        $lowprice=$result["low_price"];
        $highprice=$result["high_price"];
        $carengie=$result["engine"];
        $carbhp=$result["bhp"];
        $carseat=$result["seat"];
        $carmileage=$result["mileage"];
        $carfeature1=$result["feature1"];
        $carfeature2=$result["feature2"];
        $carfeature3=$result["feature3"];
        $carfeature4=$result["feature4"];
        
        echo '<div class="main-coin1">
        <div class="container-1">
            <div class="box1">
                <div class="mini1"><img src="'.$pic.'" alt=""></div>
                <div class="mini2">
                    <div class="car-name">'.$carname.'</div>
                    <div class="car-price">&#8377 '.$lowprice.'- &#8377 '.$highprice.'</div>
                    <div class="lines">
                        <span class="material-icons icon">
                            directions_car_filled
                        </span> Engine: '.$carengie.'
                    </div>
                    <div class="lines">
                        <span class="material-icons">
                            bolt
                        </span> BHP: '.$carbhp.'
                    </div>
                    <div class="lines">
                        <span class="material-icons">
                            airline_seat_recline_normal
                        </span> Seating Capacity: '.$carseat.'
                    </div>
                    <div class="lines">
                        <span class="material-icons">
                            speed
                        </span> Mileage: '.$carmileage.'
                    </div>
                    <div class="lines">
                        <button><a href="rentalform.php
                        " style="text-decoration: none; color: black;">Rent Car</a></button>
                    </div>
                </div>
            </div>
            <div class="box2">
                <div class="features">
                    <i class="fas fa-thumbs-up fa-1x"></i>Top Features
                </div>
                <div>
                    <ul class="fea">
                        <span class="one">
                            <span>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature1.'</li>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature2.'</li>
                            </span>
                            <span>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature3.'</li>
                                <li><i class="fas fa-chevron-right"></i> '.$carfeature4.'</li>
                            </span>
                        </span>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
    }
    ?>

</body>

</html>