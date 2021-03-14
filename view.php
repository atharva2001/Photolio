<?php include "db_conn.php";
session_start();

$username=$_SESSION['username'];
$email=$_SESSION['email'];
$email=$_GET['email'];


//insert $x into db!!!
//profile pic

//Changing DP//


$select="SELECT * from `admin_dp` where email='".$email."'";
 $qr=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($qr)) {
     $dbprofile_pic='images/admin_profile/'.$row['profile_pic'];
}
if(isset($_POST['submit'])){
    $comment=$_POST['comment'];
    $select="SELECT * from `admin_dp` where email='".$email."'";
 $qr=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($qr)) {
     $profile_pic=$row['profile_pic'];
    
     $insert="INSERT INTO `admin_dp`(`username`, `email`, `profile_pic`, `comment`) VALUES ('".$username."','".$email."','".$profile_pic."','".$comment."')";
    $qr=mysqli_query($conn,$insert);
   
    if($qr){
        ?>
        <script>
        alert("You have commented !");
        <?php
            $email=urlencode($email);
        ?>
        window.location.replace("view.php?email=<?php echo $email;?>");
        </script>
        <?php

    }
 ?>

    <?php

}

}
     

//profile end
 


 ?>


 




<!DOCTYPE html>
<html>
<head>
	<title>View</title>
		<meta charset="UTF-8">
		<meta name="viewport"  content="width=device-width, initial-scale=1.0">
</head>
<style>
input{
     margin-left:50px;

}
body{
 background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    font-family: 'Benne', serif;
}
.posts{
    width:50%;
    height:60px;
}



 @media  only screen and (max-width: 600px){

 }
</style>
<body>

<center>



 <img src="<?php echo $dbprofile_pic; ?>"style="width:150px; height:120px; margin-left:50px; border-radius: 50%;">

 <div class="details">
    
    <?php
    echo "Username- ".$username;
     echo "<br>";
    
    


 
    echo "Email- ".$email; 
    ?>
<form method="POST">
<h1>Attribute the Photographer(Your identity wont be disclosed)</h1>
    <input type="text" name="comment"></input>
    <button type="submit" name="submit">
    Comment
    </button>
    </form>

 </div>
 
    
     
     <br>
     <hr>
     <h1>Photos</h1>
     </center>

     <?php
     $select="SELECT * from `admin` where email='".$email."' ORDER BY id DESC ";
 $qr=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($qr)) {
     $db_posts='images/posts/'.$row['photos'];
    ?>
    <center>
    <img src="<?php echo $db_posts; ?>"style="width:50%; height:10%; " alt="Start Uploading Now ->->->" >
    </center>
    <?php
}
?>
</body>
