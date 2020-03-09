<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php
            $conn = mysqli_connect("localhost","root","","tester","3306");
            $query = mysqli_query($conn,"SELECT * FROM register");
            $fetch = mysqli_fetch_assoc($query)
        ?>
    Welcome <?php echo $_POST["nama"]; ?><br>
    Your Number is: <?php echo $_POST[$fetch['no']] ; ?>
</body>
</html>