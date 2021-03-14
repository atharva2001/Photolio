<?php include "db_conn.php";
	 session_start();
	if (isset($_POST['submit'])) {
        $username=$_POST['username'];
		$password=$_POST['password']; 

		$select="SELECT * from `register` where username='".$username."' and password='".$password."'";
		$qrr=mysqli_query($conn,$select);
	while ($row=mysqli_fetch_assoc($qrr)) {
		if ($row['username']==$username && $row['password']==$password) {
            $_SESSION['email']=$row['email'];
			$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
			$_SESSION['id']=$row['id'];
            $_SESSION['loggedIn'] = true;  
        
			?>

			<script>
				alert('Welcome <?php echo $username ?>');
				//location of transfer!!!
				window.location.replace("admin.php");
			</script>
			<?php
		

			
        }
           
		}
        ?>
        <script>
        alert("Invalid credentials");
        </script>
        <?php 
    }
        ?>
       

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
		<meta charset="UTF-8">
		<meta name="viewport"  content="width=device-width, initial-scale=1.0">
        
        
	 <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet"> 
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	

</head>
<style>
    
	body{
	background-color: #2a2a72;
background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
    font-family: 'Benne', serif;
      
	}
    
	
	.block-1{
		background-color: #6a93cb;
background-image: linear-gradient(315deg, #6a93cb 0%, #a4bfef 74%);
        box-shadow:12px 12px rgba(0,0,0,0.4);
        
		top: 20%;
		left: 31%;
		width: 350px;
        border-radius:12px;
		height: 390px;
		position: absolute;
        color:white;
		
  		

	}
  
   

	/*.block-1-upper{
		background-color: ;
		border: 1px #faa095;
  		outline: #faa095 solid 2px;
	}*/
		.field1{
        	margin-left: 25px;
            background-color:transparent;
            border:none;
             border-bottom: 1px solid white;
             color:white;
        	}
        .head2{
            font-size:25px;
        	margin-left: 10px;
        	margin-top: 45px;
        }
        .but-1{
          
        	background-color: white;
 			border: none;
  			color: black;
  			padding: 10px 20px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 16px;
  			margin: 10px 220px;
  			cursor: pointer;
  			border-radius: 15px;
        }
        .but-1:hover {
            background-color: black;
            color:white;
        }

		.but-1:active {
  		
 			box-shadow: 0 0.3px ;
  			transform: translateY(4px);
	}
    .quest{
        color:white;
        text-decoration:none;
        font-size:15px;
    }
   .quest:hover {
  color: blue;
}
a{
     text-decoration:none;
}
input:focus{
            background-color:rgba(0,0,0,0.3);
            color:white; 
        }



  
	 @media  only screen and (max-width: 600px){
      	html{
              
  background-color: #2a2a72;
background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
        width:550px;
        height:100%;
        margin-top:110%;
    }
         body{
           background-color: #2a2a72;
background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
     margin-top:100%;
   background-color:white;
  
             
          }
         
        .block-1{
            background-color: #2876f9;
background-image: linear-gradient(315deg, #2876f9 0%, #6d17cb 74%);
        	margin-top: 50%;
        	width: 250px;
        	height: 375px;
        	margin-left:center; 
            background-color:rgba(77, 5, 232, 0.8);
            box-shadow:12px 12px rgba(0,0,0,0.4);

        }
        .block-1-inner{
        	font-size: 15px;
        }
        .head2{
        	font-size: 15px;
        	margin-left:10%;
        	right: 10%;
        }
        .field1{
        	margin-left: 20px;
            color:white;

        }
        input:focus{
            background-color:rgba(0,0,0,0.3);
            color:white; 
        }
        
         .but-1{
         	margin-left: 90px;
         	padding: 10px 9px;
         }
         .quest{
             margin-left:2%;
             font-size:15px;
             
             text-decoration:none;
             color:white;
         }
         a{
            margin-top:10%;
            
            
         }
        .w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge{
         
             width:device-width;
            margin-top:device-height;
             background-color:rgba(0,0,0,0.3);
             position:fixed;
             padding-bottom:0px;
         }
         
  }       
        
       
</style>
<body>
    
    <center>
<div class="block-1">
	<div class="block-1-inner">
		<h1 style="text-align: center;">Login here</h1>

        <form method="POST">
			<h3 class="head2">Username</h3>
    			<input class="field1" type="text" name="username" placeholder="Enter Username" required>
    		<h3 class="head2">Password</h3>
    			<input class="field1"  type="Password" name="password" placeholder="Enter Password" required>
            <hr>
       
               
               <a href="register.php">
                <h3 class="quest">Create a account?</h3>
                </a>
	</div>
                    
    			 <input class="but-1" type="submit" name="submit" value="Login">
    		
    
	
</div>
 </form>
    </center>
</body>
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:50%;background-color: rgb(158,158,158);"> 
		<div class="foot-data">
        Follow us on 

        
<a href="https://www.instagram.com/atharva.shirke.77/?a=1";
  <i class="fa fa-instagram w3-hover-opacity"></i>
</a>
<!--Social Media

  <i class="fa fa-facebook-official w3-hover-opacity" style="margin-top: 3%;"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  -->

  <p class="w3-medium">Powered by <a href="https://www.google.com" target="_blank" class="w3-hover-text-blue">Google</a></p>
</div>
</footer>
</html>