<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add car company</title>
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="post" enctype='multipart/form-data'>
            <table border='2'>
                <tr>
                    <td colspan=2 style="text-align: center;">
                        <h3>
                            Enter car details
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>*Main ID: </td>
                    <td><input type="text" name="mid" maxlength="5" Required /> </td>
                </tr>
                <tr>
                    <td>*Temp ID: </td>
                    <td><input type="text" name="tid" maxlength="5" Required /> </td>
                </tr>
                <tr>
                    <td>*Car name:</td>
                    <td><input type="text" name="cname" Required></td>
                </tr>
                <tr>
                    <td>*Low price: </td>
                    <td><input type="text" name="low" Required /> </td>
                </tr>
                <tr>
                    <td>*High price: </td>
                    <td><input type="text" name="high" Required /> </td>
                </tr>
                <tr>
                    <td>*Engine: </td>
                    <td><input type="text" name="engine" Required /> </td>
                </tr>
                <tr>
                    <td>*BHP: </td>
                    <td><input type="text" name="bhp" Required /> </td>
                </tr>
                <tr>
                    <td>*Seat: </td>
                    <td><input type="text" name="seat" Required /> </td>
                </tr>
                <tr>
                    <td>*Mileage: </td>
                    <td><input type="text" name="mileage" Required /> </td>
                </tr>
                <tr>
                    <td>*Feature1: </td>
                    <td><input type="text" name="fea1" Required /> </td>
                </tr>
                <tr>
                    <td>*Feature2: </td>
                    <td><input type="text" name="fea2" Required /> </td>
                </tr>
                <tr>
                    <td>*Feature3: </td>
                    <td><input type="text" name="fea3" Required /> </td>
                </tr>
                <tr>
                    <td>*Feature4: </td>
                    <td><input type="text" name="fea4" Required /> </td>
                </tr>
                <tr>
                    <td>Select car Image:</td>
                    <td><input type="file" name="cimage"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><input type="submit" value="submit" name="submit"></td>
                    <td><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>


<?php 

if(isset($_POST['submit']))
{
    $mainid=$_POST['mid'];
    $tempid=$_POST['tid'];
    $carname=$_POST['cname'];
    $lowp=$_POST['low'];
    $highp=$_POST['high'];
    $engine=$_POST['engine'];
    $bhp=$_POST['bhp'];
    $seat=$_POST['seat'];
    $mileage=$_POST['mileage'];
    $feature1=$_POST['fea1'];
    $feature2=$_POST['fea2'];
    $feature3=$_POST['fea3'];
    $feature4=$_POST['fea4'];
    $file=$_FILES['cimage'];


    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];

    if($fileerror==0)
    {
        $destfile='photos/upload_car/'.$filename;

        move_uploaded_file($filepath,$destfile);

        $sql="INSERT INTO `car_details` (`main_id`, `temp_id`, `car_name`, `low_price`, `high_price`, `engine`, `bhp`, `seat`, `mileage`, `feature1`, `feature2`, `feature3`, `feature4`, `image`) VALUES ('$mainid', '$tempid', '$carname', '$lowp', '$highp', '$engine', '$bhp', '$seat', '$mileage', '$feature1', '$feature2', '$feature3', '$feature4', '$destfile')";

        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "image inserted";
        }
        else
        {
            echo "image not inserted";
        }
    }
}

?>