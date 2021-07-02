<?php
// Start the session and get the data
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation bar</title>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <!-- link my css -->
        <link rel="stylesheet" href="css/display.css" />

        <!-- bootstrap CSS  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous" />

        <!-- fontawasum icons -->
        <script src="https://kit.fontawesome.com/5d56134312.js" crossorigin="anonymous"></script>


    </head>

    <body>

        <nav class="navbar fixed-top navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-warning ms-4 logo-font fs-4" href="#">RKT</a>
                <div class="user-logo">
                    <i class="fas fa-user fa-2x me-lg-4 me-md-3 me-sm-2"><?php echo "  ".$_SESSION['username']?></i>
                </div>
            </div>
        </nav>
    </body>

    </html>

</body>

</html>