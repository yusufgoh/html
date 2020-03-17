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
    Welcome to Updating Data Form ! 
    <form  method="post">
        Name : <input type="text" name="nam">
            <br>
        Number : <input type="number" name="no">
            <br>
        E-mail Address : <input type="text" name="email">
            <br>
    <input type="submit" value="UPDATE DATA">
    </form>

    <?php  
        $a = $_POST["nam"];
        $b = $_POST["no"];
        $c = $_POST["email"];
        mysqli_query($conn,"INSERT INTO register (nama,no,email) VALUES ('$a',$b,'$c')");
    ?>
    DONE UPDATING !!! 
    <form action="testing.php">
    <input type="submit" value="BACK TO HOME !">
    </form>     
    
</body>
</html>