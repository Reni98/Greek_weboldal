<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();
$connection = mysqli_connect("localhost","root","","holiday" );
if(isset($_POST['insert_btn']))
{
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $szoveg = $_POST['szoveg'];

    $insert_query= "INSERT INTO guest(email, pwd, szoveg) VALUES('$email','$pwd','$szoveg')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['status']= "Data inserted succesfully";
        header('location: index.php');
       
    }
    else{
        $_SESSION['status']="data not inserted succesfully";
        header('location: index.php');
        
    }
}
?>
