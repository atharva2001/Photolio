<?php include"db_conn.php";
session_start();
if($_SESSION['loggedIn']){
$username=$_SESSION['username'];
$email=$_SESSION['email'];

}

else
      //redirect to the login page
      header('Location: /loginnew.php');  
?>

<!DOCTYPE html>
<html>

<head>
<title>Comments</title>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color:white;
}

td, th {
         color:white;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {

  background-color: #0000;
}
body{
     color:white;
  background-color: #7f5a83 ;
background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%)cover;
    font-family: 'Benne', serif;

}

</style>
</head>
<body>

<h2 style="text-align:center;">Comments!!!</h2>

<table>
  <tr>
    
    
    <th style="text-align:center;">These Comments are given by viewers on your Photos!</th>
  </tr>
  <?php

$select="SELECT * from `admin_dp` where email='".$email."'";
$qr=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($qr)){
$comment=$row['comment'];

  ?>
  <tr>
  
    <td style="text-align:center;"><?php echo $comment;?></td>
    
  </tr>
  <?php
}
 ?>
  
</table>

</body>
</html>
