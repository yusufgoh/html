<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>
    <?php
        $conn = mysqli_connect("localhost","root","","tester","3307");

        $query = mysqli_query($conn,"SELECT * FROM register");
        while ($fetch = mysqli_fetch_assoc($query)){

            echo $fetch['no'];
            echo $fetch['nama'];
        }

    









    ?>
</body>
</html>