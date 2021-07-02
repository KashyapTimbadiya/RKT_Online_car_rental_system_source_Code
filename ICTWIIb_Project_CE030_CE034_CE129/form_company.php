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
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    td {
        height: 35px;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="post" enctype='multipart/form-data'>
            <table border='2'>
                <tr>
                    <td>*ID: </td>
                    <td><input type="text" name="id" maxlength="5" Required /> </td>
                </tr>
                <tr>
                    <td>*Company name:</td>
                    <td><input type="text" name="name" Required></td>
                </tr>
                <tr>
                    <td>Select Company Image:</td>
                    <td><input type="file" name="image"></td>
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
    $name=$_POST['name'];
    $id=$_POST['id'];
    $file=$_FILES['image'];

    // print_r($file);
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    if($fileerror==0)
    {
        $destfile='photos/upload_company/'.$filename;
        // echo $destfile;
        move_uploaded_file($filepath,$destfile);

        $insert="insert into company(id,company_name,image) values('$id','$name','$destfile')";

        $query=mysqli_query($conn,$insert);

        if($query)
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