<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border : 1px solid black ;
        border-collapse : collapse;
        
    }
    th{
        background-color : powderblue;
        font-size: 25px ; 
    }
    th,td{
        padding : 10px;
        text-align: center ;
        
    }
    td#t01{
        text-align:right;
    }
</style>
<body>
    <h1>Hello World!</h1>
        <?php
    $conn = mysqli_connect("localhost","root","","tester","3306");
    $query = mysqli_query($conn,"SELECT * FROM register");
        ?>
    
    
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th></tr>
    <?php

      
        while ($fetch = mysqli_fetch_assoc($query)){
            echo '<tr>';
            echo '<td>'.$fetch['no'].'</td>';
            echo '<td style="background-color:yellow" id="t01">'.$fetch['nama'].'</td></tr>';
        }
           
    ?>
    </table>
    <form action="showing.php" method="post">
        
    Name: <input type="text" name="nam"><br>
    <input type="submit">
    </form>       


</body>
</html>