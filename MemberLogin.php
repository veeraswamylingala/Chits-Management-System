<?php
// Starting session
session_start();
?>
<!doctype html>
<html lang="en">
<head>
     <title>
        Chits Home Page
    </title>
    
    
        
        
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <!--    JavaScript-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
</script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
   <!--------Icons------->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--    External CSS-->
    <link rel="stylesheet" href="in.css">
    
    
   </head>
    <body>
        
                    <?php
        
                    if(isset($_POST["Email"]))
                    {
                    
                        if (!isset($_SESSION)) {
  session_start();
}
                       

$email=$_POST['Email'];
$pass=$_POST['Password'];

$username="root";
$servername="localhost";
$password="";
$dbname="chitsdatabase";
$temp=0;

    if($email == 'Admin' && $pass == "Viratkohli")
    {
        header("Location:AdminDashboard.php");
          $_SESSION['Email'] =["Admin",""];
        
    }else
       {                 
                        
$conn=new mysqli($servername,$username,$password,$dbname);

$sql="select Email,Password from memberstable";

$res=$conn->query($sql);
if($res->num_rows>0)
{
while($row=$res->fetch_assoc())
{
$x=$row['Email'];
$y=$row['Password'];

if($x==$email)
{
	if($y==$pass)
	{
        
		
		
         $_SESSION['Email'] =[$email,"Member"];

         $temp=1;
   
}

      
    }
}
}	
if($temp==1)
{
    header("Location:MemberDashboard.php");
}
else 
{	
 echo '<script language="javascript">';
echo 'alert("Incorrect Password")';
echo '</script>';

	}
        $conn->close();     
    }
    }

	?>
                   

         
       
    
       
    <!---------------Navgition Bar-------------->

        <section id = "Nav-Bar">
            
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light scrolling-navbar">
        
  <a class="navbar-brand" href="#"><img src="Images/logo.png"></a>
        
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      
    <span class="navbar-toggler-icon"></span>
  </button>
        
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#About">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#ChitPlans">CHITS PLANS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#WAChit">WHAT IS CHIT</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="index.php#FAQS">FAQS</a>
      </li>
         
            <li class="nav-item">
        <a class="nav-link" href="Index.php#Interestetdtojoin">INTERESTED TO JOIN</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#Contact">CONTACT</a>
      </li>
        <li class="nav-item dropdown">
              
               <?php
               if(isset($_SESSION["Email"]))
               { ?>
                   
       <div class="btn-group" style="float: right;
    text-align: left;">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    USER
  </button>
  <div class="dropdown-menu">
           <?php 
                   $value = $_SESSION['Email'] ;
           
                   if( $value[1] == "Member")
                   {
                       ?>
    <a class="dropdown-item" href="MemberDashboard.php"> <?php echo "$value[0]"; ?></a> 
                  <?php }else
                   { ?>
    <a class="dropdown-item" href="AgentDashBoard.php">
        <?php echo "$value[0]"; ?></a> 
                        
              <?php    }
                    ?>
     <div class="dropdown-divider"></div>
   
    <a class="dropdown-item" href="logout.php">Logout</a>
   
  </div>
</div>
       
                
           <?php    }else{
                            ?>
       <div class="btn-group" style="float: right;
    text-align: left;">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    LOGIN
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="AgentLogin.php">Agent</a>
    <a class="dropdown-item" href="MemberLogin.php">Member</a>
   
  </div>
</div>
           <?php    } ?>
               
      
               
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#Contact"></a>
      </li>
            
    
    </ul>
  </div>
            </nav>
      
        </section>
        
        
    <!--------------------Space------------------>
        <form method="post" >
        <div class="containeer" 
        style="height:650px;background-image:url('Images/services.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
               ">
        <center>  
            <div class="container" style="">
                <br><br><br><br><br><br>
           
                <div class="row" style="height:auto;
                                    width:400px;
                                    background-color:green">
                 
             <h4 style="margin-left:100px;margin-top:20px;color:white"> Member Log-In</h4>
                
                <div class="container" style="padding:30px 30px;background-color:white;">

                
               <h6 style="float:left;margin-top:0px;">  Log-In with your Email</h6> <br>
                   
                    <div class="container" style="padding:10px 0px;">
                    <input type="text" name="Email" placeholder="UserName" class="form-control" required style="margin-top:0px;">
                    
                    <input type="password" name="Password" placeholder="Password" class="form-control" required style="margin-top:10px;">
                  
                   </div>
                   
              <button type="submit" class="btn btn-success" name="MemberLoginButton" style="float: right;background-color:green;Margin-top:10px; ">Login</button>
              
                    
                    
                    
                  <a href="" ><label style="float:left;margin-top:10px;">Request a Passsword Reset</label>
                 </div>         
            </div>
                </div>
            </center>
        </div>
        </form>
        <!-------------------Contact------------->
        <section id="Contact">
           <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ContactBox">
                            
<i class="fa fa-map-marker" style="font-size: 32px" ></i><h4 style="">Contact</h4>
                           H.NO:8-6-241/A,FIRST FLOOR,<br>
                            PADMAVATHI COLONY,OPP:ANDHAR BANK,<br>
                        MAHABUBNAGAR-509001
                        </div></div>
                     <div class="col-md-6">
                           <div class="ContactBox" >
                               <h4>Social Media </h4>
                               
                    <i class="fa fa-facebook-square" style="font-size: 32px"></i> 
                               
                     <i class="fa fa-twitter-square", style="font-size: 32px"></i>    
                            
                    <i class="fa fa-google-plus-square",
                       style="font-size: 32px"></i>
                               
                <i class="fa fa-linkedin-square",
                   style="font-size: 32px"></i>
                 
                         </div>
               
            </div>
                  
                </div>
               </div>
        </section>
        
      <!--------------Footer------------->
        <footer id="footer">
            <div class="foot">
                &copy COPYRIGHT2020 DESIGNED BY VEE TECHNOLOGY PRIVATE LIMITED.
            </div>
        
        </footer>
        
    </body>
</html>

