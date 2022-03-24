<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Student ID Card Generator</title>
    <style>
        form{
            width: 30%;
            height: auto;
            padding: 50px;
            border: 5px solid red;
            box-shadow: 3px 3px 10px 5px grey;
            margin: 50px auto;

        }
    </style>
</head>
<body>
    <form action="id.php" method="post" enctype="multipart/form-data">
        <h2>Create Your Visual ID Card</h2>
        <label for="uname">Name: </label><input type="text" name="user_name" required> <br><br>
        <label for="number">Phone: </label><input type="number" name="user_phone" required> <br><br>
        <label for="email">Email: </label><input type="email" name="user_email" required> <br><br>

        <label for="gender">Gender: </label>
                   <input type="radio" name="gender" required value="Male">Male
                   <input type="radio" name="gender" required value="Female">Female <br><br>

        <label for="course">Course: </label><input type="text" name="course" required> <br><br>
        <label for="batch_id">Batch Id: </label><input type="text" name="batch_id" required> <br><br>
        <label for="batch_id">Image: </label><input type="file" name="upload_image" required> <br><br>
        <input type="submit" name="submit" value="Generate ID">
    </form>
</body>
</html>