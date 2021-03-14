<?php include "db_conn.php";
session_start();
$category=$_GET['category'];





?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" >


	 <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet"> 
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<title>Category</title>
</head>
<style>
body{
    color:white;
    background: rgb(55,224,221);
background: radial-gradient(circle, rgba(55,224,221,1) 3%, rgba(56,228,223,1) 28%, rgba(33,86,142,1) 100%);
    font-family: 'Benne', serif;
}
.profile:hover{
    background-color:black;
    color:white;
}
@media only screen and (max-width: 600px){

  .profile{
      border-radius:12px;
  }  
  img{
      
      width:100%;
      height:65%;
  }
}
 .profile{
      border-radius:12px;
  } 
img{
      margin-left:35%;
      width:35%;
      height:35%;
  }

</style>
<body>

<?php
$select="SELECT * from `admin` where category='".$category."'";
$qr=mysqli_query($conn,$select);
$cnt=1;
echo "<h1>Images Related to   $category !!!!</h1><hr>";
while($row=mysqli_fetch_assoc($qr))
    {
    $photos="images/posts/".$row['photos'];
    $username=$row['name'];
    $email=$row['email'];
    $cat=$row['category'];
    
   
    if($username==null || $username==""){

    }
    else{
        $cnt=0;
    }
   ?>
  
<div class="display">
<div class="data" style="margin-left:35%;">
A picture Clicked by  <?php  echo $username;  ?>


<a href="view.php?email=<?php echo ''.$email.'';?>">

<button class="profile" name="submit" type="submit">
 View Profile!

</button>
</a>
</div>
<br>

<img src="<?php  echo $photos; ?>">

<hr>

</div>

<?php

}
 
if($cnt==1){
    echo "<center><h1><span style=color:red;>No</span> Images's found!!!</h1></center>";;

}

?>
</body>
</html>