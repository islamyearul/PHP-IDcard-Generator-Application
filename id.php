
<?php

if( isset($_POST['submit'])){
    $uname = $_POST['user_name'];
    $phone = $_POST['user_phone'];
    $email = $_POST['user_email'];
    $course = $_POST['course'];
    $batch_id = $_POST['batch_id'];
    $gender = $_POST['gender'];

   // print_r($_FILES);

    $img_name = $_FILES['upload_image']['name'];
    $tmp_name = $_FILES['upload_image']['tmp_name'];

    move_uploaded_file($tmp_name, "upload/".$img_name);

}


?>




<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>
        Identity Card Design
        | HTML and CSS Code
    </title>
      <style>
          
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                padding-top: 50px;
            }
            
            .card {
                box-shadow: 0 5px 5px 5px #e1e1e1;
                max-width: 350px;
                padding: 15px;
                border-radius: 5px;
                margin: auto;
                text-align: center;
            }
            
            img {
                width: 50%;
                border: 5px solid #e1e1e1;
                border-radius: 50%;
            }
            
            .social {
                margin: 15px 0;
            }
            
            a {
                font-size: 26px;
                padding: 7px 12px;
                text-decoration: none;
                color: #585858;
                border: 1px solid #e1e1e1;
                border-radius: 10px;
            }
            
            a:hover {
                background-color: #585858;
                color: #ffffff;
            }
            table, table tr td {
                width: 290px;
                margin: 0 auto;
                border: 1px solid #e1e1e1;
                text-align: left;
            }

      </style>
</head>
 
<body>
    <div class="card">
    <img src="upload/<?php if(isset($img_name)){ echo $img_name;} ?>" alt="<?php echo $uname ?>">
        <h1><?php echo $uname ?></h1>
 
        <table>
            <tr>
                <td><strong>Employee ID</strong></td>
                <td><?php echo $batch_id ?></td>
            </tr>
            <tr>
                <td><strong>Course</strong></td>
                <td><?php echo $course ?></td>
            </tr>
            <tr>
                <td><strong>Gender</strong></td>
                <td><?php echo $gender ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td><strong>Contact</strong></td>
                <td><?php echo $phone ?></td>
            </tr>
        </table>
        <div class="social">
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>
    </div>
</body>
 
</html>