<?php include "db_conn.php";
session_start();

$username=$_SESSION['username'];
$email=$_SESSION['email'];
//insert $x into db!!!
//profile pic
if (isset($_POST['submit'])){
$target_dir = "images/admin_profile/";
       $target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["profilepicture"]["tmp_name"]);
        
 
         if($check !== false) {
        $uploadOk = 1;

                 } else {
            echo '<script language="javascript">';
            echo 'alert("File not image")';
            echo '</script>';
        $uploadOk = 0;
                            }
            
          
    $x=basename( $_FILES["profilepicture"]["name"]);//img name
    

    
if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file)) {

    
    $insert="INSERT INTO `admin_dp` (`username`, `email`,`profile_pic`) VALUES ('".$username."','".$email."','".$x."')";
            
    $qr=mysqli_query($conn,$insert);
    if($qr){
        ?>

        <script>
        alert("Dp Uploaded");
        </script>
      <?php


    }
    else{
        ?>
        <script>
        alert("Something went wrong");
        </script>
        <?php
    }
   

} 

    else {
           echo '<script language="javascript">';
            echo 'alert("There was error!!")';
            echo '</script>';
    }


}
//Changing DP//
if (isset($_POST['change'])){
$target_dir = "images/admin_profile/";
       $target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["profilepicture"]["tmp_name"]);
        
 
         if($check !== false) {
        $uploadOk = 1;

                 } else {
            echo '<script language="javascript">';
            echo 'alert("File not image")';
            echo '</script>';
        $uploadOk = 0;
                            }
            
          
    $x=basename( $_FILES["profilepicture"]["name"]);//img name
    

    
if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file)) {

    
    $update="UPDATE `admin_dp` SET `username`='".$username."',`email`='".$email."',`profile_pic`='".$x."' WHERE email='".$email."'";
            
    $qr=mysqli_query($conn,$update);
    if($qr){
        ?>

        <script>
        alert("Dp Updated");
        </script>
      <?php


    }
    else{
        ?>
        <script>
        alert("Something went wrong");
        </script>
        <?php
    }
   

} 

    else {
           echo '<script language="javascript">';
            echo 'alert("There was error!!")';
            echo '</script>';
    }


}

$select="SELECT * from `admin_dp` where email='".$email."'";
 $qr=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($qr)) {
     $dbprofile_pic='images/admin_profile/'.$row['profile_pic'];
   
}


     

//profile end
 


 //---------------------------posts-----------------------------------//


 if (isset($_POST['posts'])){
     $cate=$_POST['category'];
     
$target_dir = "images/posts/";
       $target_file = $target_dir . basename($_FILES["photos"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["photos"]["tmp_name"]);
        
 
         if($check !== false) {
        $uploadOk = 1;

                 } else {
            echo '<script language="javascript">';
            echo 'alert("File not image")';
            echo '</script>';
        $uploadOk = 0;
                            }
            
          
    $posts=basename( $_FILES["photos"]["name"]);//img name
    

   

      
if (move_uploaded_file($_FILES["photos"]["tmp_name"], $target_file)) {
    $insert="INSERT INTO `admin`(`name`, `email`,`photos`,`category`) VALUES ('".$username."','".$email."','".$posts."','".$cate."')";
            
    $qr=mysqli_query($conn,$insert);
    ?>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <?php
    if($qr){
        ?>

        <script>
        alert("You have posted!!");
        </script>
      <?php
    

    }
    else{
        ?>
        <script>
        alert("Something went wrong");
        </script>
        <?php
    }
   

} 


    else {
           echo '<script language="javascript">';
            echo 'alert("There was error!!")';
            echo '</script>';
    }



//profile end
 
 }
 if(isset($_POST['delete'])){
     $del="DELETE from register where email='".$email."'";
     $qr=mysqli_query($conn,$del);
      $del1="DELETE from admin where email='".$email."'";
     $qr1=mysqli_query($conn,$del1);
      $del2="DELETE from admin_dp where email='".$email."'";
     $qr2=mysqli_query($conn,$del2);
     if($qr){
         ?>
         <script>
         alert('Sorry to see you go <?php echo $username ?>');
         window.location.replace('index.html');
         </script>
         <?php
     }

 }
 if(isset($_POST['comment'])){
     $select="SELECT * from `admin_dp` where email='".$email."'";
     $qr=mysqli_query($conn,$select);
     if($qr){
              ?>
     <script>
     window.location.replace("view-comments.php");
     </script>
<?php
         
     }

 }

?>



<!DOCTYPE html>
<html>
<head>
    <title>Photographers</title>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet"> 
</head>
<style>
input{
     margin-left:50px;

}
.posts{
    width:50%;
    height:60px;
    border-radius:12px;
    font-family: "Lucida Console", Monaco, monospace;
    font-size: 20px;
}
.posts:hover{
    font-weight:bold;
    padding-left:12px;
    
    color:#fe7dff;
    background-color:#1b41c8;
    font-size:20px;
}
img{
width:30%; 
height:7%
}
body{
 background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    font-family: 'Benne', serif;
}

 @media  only screen and (max-width: 600px){
 img{
     width:40%;
 }

 }
 .button_slide {
  color: #000;
  border: 2px solid rgb(216, 2, 134);
  border-radius: 0px;
  padding: 12px 24px;
  display: inline-block;
  font-family: "Lucida Console", Monaco, monospace;
  font-size: 14px;
  letter-spacing: 1px;
  cursor: pointer;
  box-shadow: inset 0 0 0 0 ;
  -webkit-transition: ease-out 0.4s;
  -moz-transition: ease-out 0.4s;
  transition: ease-out 0.4s;
}
 .button_slide:hover {
  box-shadow: inset 0 100px 0 0 #D80286;
}

 .button_slide-delete {
  color: #d40225;
  border: 2px solid rgb(216, 2, 134);
  border-radius: 0px;
  padding: 12px 24px;
  display: inline-block;
  font-family: "Lucida Console", Monaco, monospace;
  font-size: 14px;
  letter-spacing: 1px;
  cursor: pointer;
  box-shadow: inset 0 0 0 0 #ff0008;
  -webkit-transition: ease-out 0.1s;
  -moz-transition: ease-out 0.1s;
  transition: ease-out 0.1s;
}
.button_slide-delete:hover{
    font-weight:bold;
    padding-left:12px;
    box-shadow: inset 0 100px 0 0 ;
    color:white;
    box-shadow: inset 0 100px 0 0 #d40225;
    font-size:20px;
}



</style>
<body>
<center>



 <img src="<?php echo $dbprofile_pic; ?>"style="width:150px; height:120px; margin-left:50px; border-radius: 50%;">

 <div class="details">
    
    <?php
    echo $username;
    echo "<hr>";
    echo $email; 
    ?>

 </div>
 
    <form method="POST" enctype="multipart/form-data">
     <p> Upload/Edit your Profile Picture below</p>
                <input type="file" name="profilepicture" ><br>

    </input>
    <br>
   <button class="button_slide" name="submit" type="submit" value="submit">
            Upload DP
            </button>
    <button class="button_slide" name="change" type="submit" value="submit">
            Change DP
            </button>
    <button class="button_slide-delete" name="delete" type="submit" value="submit">
            Delete Account
            </button>
             <br> <br>
     <button class="button_slide" name="comment" type="submit">
     View Comments!</button>
    <br>
     <br>
      <br>
             
  
     
    
     Choose your Category
     <select name="category">
     <option value="Nature">Nature</option>
     <option value="Food">Food</option>
     <option value="Buildings">Buildings</option>
     <option value="Animals">Animals</option>
     <option value="FLowers">FLowers</option>
     <option value="Sports">Sports</option>
     
     </select>
     <input type="file" name="photos" ><br>

    </input>
    <br>
     <button class="posts" name="posts" type="submit">Add Photos</button>
    
     
       </form>
     </center>
     <br>
     <hr>
     <?php
     $select="SELECT * from `admin` where email='".$email."' ORDER BY id DESC ";
 $qr=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($qr)) {
     $db_posts='images/posts/'.$row['photos'];
    ?>
    <center>
    
    <img src="<?php echo $db_posts;?>" alt="Start Uploading Now ->->->" >
    
    </center>
    <br>
    <?php
}
?>
</body>
