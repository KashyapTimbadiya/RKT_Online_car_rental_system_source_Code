<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display company logo</title>
    <!-- link my css -->
    <link rel="stylesheet" href="css/display_1.css">

    <!-- bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- fontawasum icons -->
    <script src="https://kit.fontawesome.com/5d56134312.js" crossorigin="anonymous"></script>


</head>

<body>
    <!-- navigation bar -->
    <?php include "navigation_bar.php"; ?>

    <!-- first image -->
    <div class="container1"></div>

    <!-- company logos -->
    <div class="text1 text-center fs-1 fw-bold mt-5">Popular Brands</div>


    <div class="row">
        <?php
    $select="select * from company";
    $query=mysqli_query($conn,$select);
    while($result=mysqli_fetch_array($query)){
        $myid=$result["id"];
        $picture=$result["image"];
        $company=$result["company_name"];
        echo '<div class="col-md-4">
                <div class="card card1 mt-3">
                    <a href="select_car.php?cid='.$myid.'"> 
                    <div class="container">
                    <img src="'.$picture.'" alt="Avatar" class="image">
                    <div class="overlay">
                      <div class="text">'.$company.'</div>
                    </div>
                  </div>
        </div>
    </div>';
    
    }
    ?>
    </div>
    </div>


    <!-- examples of some cars -->
    <div class="container3">

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 mx-3">
            <div class="col">
                <div class="card card2 border-0 ">
                    <img src="photos/cars/i20.jpeg" class="card-img-top mx-auto d-block mt-4" alt="...">
                    <div class="card-body text-center card3">
                        <h5 class="card-title fs-3"> Hyundai i20</h5>
                        <div class="text-dark fs-4">
                            <p>Staring from : 8000&#8377</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card2 border-0">
                    <img src="photos/cars/fortuner.webp" class="card-img-top mx-auto d-block mt-4" alt="...">
                    <div class="card-body text-center ">
                        <h5 class="card-title fs-3">Toyota fortuner</h5>
                        <div class="text-dark fs-4">
                            <p>Staring from : 15000&#8377</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card2 border-0">
                    <img src="photos/cars/xcent.webp" class=" card-img-top mx-auto d-block mt-4" alt="...">
                    <div class="card-body text-center mx-auto">
                        <h5 class="card-title fs-3"> Hyundai Xecnt</h5>
                        <div class="text-dark fs-4">
                            <p>Staring from : 6000&#8377</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card2 border-0">
                    <img src="photos/cars/kwid.jpg" class="card-img-top mx-auto d-block mt-4" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-3">Renault kwid</h5>
                        <div class="text-dark fs-4">
                            <p>Staring from : 7000&#8377</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>