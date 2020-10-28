
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
    
    
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    
    <!--    External CSS-->
    <link rel="stylesheet" href="in.css">
    
    <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

    
    
   </head>
    <body bgcolor="#E5E8E8">
        <?php
     
if(isset($_POST["SubmitButton"]))
{
    
   $value = $_SESSION['Email'] ;
$Email=$value[0];   
$MemberHelpTextArea=$_POST['MemberHelpTextArea'];

     
$username="root";
$servername="localhost";
$password="";
$dbname="chitsdatabase";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
	echo "connection error";


        
$sql="insert into membershelps(Email,Help)
values('$Email','$MemberHelpTextArea')";
 
if($conn->query($sql)==true)
{
   
 header('Location:MemberDashboard.php');
exit;
}
 else
 {
    echo "Error :";    }

$conn->close();
  }
?>
         
         
      
    
       
    <!---------------Navgition Bar-------------->

        <section id = "Nav-Bar" >
            
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar">
        
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
        
  <!-- Page Wrapper -->
  <div id="wrapper">
      
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span></span></a>
      </li>

    
      <hr class="sidebar-divider my-0">

      <li class="nav-item" >
        <a class="nav-link" href="MemberDashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Profile</span></a>
      </li>
        
       <hr class="sidebar-divider my-0">
        
      <li class="nav-item">
        <a class="nav-link" href="DashboardActivePlans.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Active Plans</span></a>
      </li>
        
        
      <hr class="sidebar-divider my-0">
        
         <li class="nav-item">
        <a class="nav-link" href="AgentDetails.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Agent</span></a>
      </li>
        
         
      <hr class="sidebar-divider my-0">
        
         <li class="nav-item active">
        <a class="nav-link" href="Memberhelp.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Help</span></a>
      </li>
        
         
      <hr class="sidebar-divider my-0">
        
         <li class="nav-item">
        <a class="nav-link" href="MemberReports.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Reports</span></a>
      </li>
        
    </ul>
    <!-- End of Sidebar -->

        <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
        <br><br>
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          </div>

          <!-- Content Row -->  
                              <form method="post">
            <div class="row" >
                        <div class="col-md-4" ></div>
                <div class="col-md-4" >

                  <div class="form-group">
                      <center> <h3 class="h4 mb-0 text-gray-800">What type of Help do you want</h3></center><br>
   
    <textarea class="form-control" name="MemberHelpTextArea"id="exampleFormControlTextarea1" rows="6" style="width:100%"></textarea>
                      <br>
    <button type="submit" name="SubmitButton" class="btn btn-success" style="float: right; ">Submit</button>
                      
  </div></div>
                </div>   
                  
           
            </form>
                     
                          </div>
                    </div>   
            </div>
                  </div>
                
              
              
              
           
              

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
  
                    
                    
                    
<!--
                    <h4>User Profile</h4>
                     
        <?php
$link = mysqli_connect("localhost", "root", "", "chitsdatabase");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM memberstable where Email = '$value[0]'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        echo "<table  border=3>";
       
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['PhoneNumber']. "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Plan'] . "</td>";
                  $AssignedAgent = $row['AssignedAgent'] ;
                echo "<td>" . $row['AssignedAgent']. "</td>";
                  
              }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
-->
                    
                    
<!--
                
        <?php
$link = mysqli_connect("localhost", "root", "", "chitsdatabase");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM agentstable where Name = '$AssignedAgent'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        echo "<table  border=3>";
       
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['PhoneNumber']. "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Active Members']. "</td>";
                  
              }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
-->

        
      <!--------------Footer------------->
        <footer id="footer">
            <div class="foot">
                &copy COPYRIGHT2020 DESIGNED BY VEE TECHNOLOGY PRIVATE LIMITED.
            </div>
        
        </footer>

        
    </body>
</html>

