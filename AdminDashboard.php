
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
        
      <li class="nav-item active">
        <a class="nav-link" href="AdminDashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Plans List</span></a>
      </li>
        
         
      <hr class="sidebar-divider my-0">
        
         <li class="nav-item">
        <a class="nav-link" href="AdminViewAgentsList.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Agents List</span></a>
      </li>
             
         
      <hr class="sidebar-divider my-0">
        
         <li class="nav-item ">
        <a class="nav-link" href="AdminViewAgentsReports.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>View Agents Reports</span></a>
      </li>
        <hr class="sidebar-divider my-0">
        
         <li class="nav-item">
        <a class="nav-link" href="AdminViewAgentsHelp.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>View Agents Help</span></a>
      </li>
          <hr class="sidebar-divider my-0">

      <li class="nav-item" >
        <a class="nav-link" href="AdminMembersList.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Members List</span></a>
      </li>
        
         
      <hr class="sidebar-divider my-0">
        
         <li class="nav-item">
        <a class="nav-link" href="AdminViewMembersReport.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>View Members Reports</span></a>
      </li>
        <hr class="sidebar-divider my-0">
        
         <li class="nav-item">
        <a class="nav-link" href="AdminViewMembersHelp.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>View Members Help</span></a>
      </li>
        
        <hr class="sidebar-divider my-0">
        
         <li class="nav-item">
        <a class="nav-link" href="AdminInterestedPeople.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Interested People</span></a>
      </li>
        
    </ul>
    <!-- End of Sidebar -->
      
        
    <br>
      <div class="col-md-10">
          <br><br>
          <h4>PlanA1 (1,00,000)</h4>
            <?php
                
$link = mysqli_connect("localhost", "root", "", "chitsdatabase");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM plana1";
             
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){ ?>
      
     <table class="table table-bordered"  > <?php
       
            echo "<tr>";
                echo "<th>Slno</th>";
                echo "<th>Email</th>";
                echo "<th>PhoneNumber</th>";
                 echo "<th>Name</th>";
               echo "<th>LeftMonths</th>";
                echo "<th>LeftAmount</th>";
                echo "<th>Status</th>";
                 echo "<th>Agent</th>";
                
            echo "</tr>";
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['Slno'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['PhoneNumber']. "</td>";
                echo "<td>" . $row['Name']. "</td>";
                echo "<td>" . $row['LeftMonths'] . "</td>";
                echo "<td>" . $row['LeftAmount'] . "</td>";
                echo "<td>" . $row['Status']. "</td>";
                echo "<td>" . $row['Agent']. "</td>";
                
              } ?>
        </table>;<?php
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
<!--  -------------------------------------- ---->
      <br><br>
          <h4>PlanB2 (2,00,000)</h4>
            <?php
                
$link = mysqli_connect("localhost", "root", "", "chitsdatabase");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM planb2";
             
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){ ?>
      
     <table class="table table-bordered"  > <?php
       
            echo "<tr>";
                echo "<th>Slno</th>";
                echo "<th>Email</th>";
                echo "<th>PhoneNumber</th>";
                 echo "<th>Name</th>";
               echo "<th>LeftMonths</th>";
                echo "<th>LeftAmount</th>";
                echo "<th>Status</th>";
                 echo "<th>Agent</th>";
                
            echo "</tr>";
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['Slno'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['PhoneNumber']. "</td>";
                echo "<td>" . $row['Name']. "</td>";
                echo "<td>" . $row['LeftMonths'] . "</td>";
                echo "<td>" . $row['LeftAmount'] . "</td>";
                echo "<td>" . $row['Status']. "</td>";
                echo "<td>" . $row['Agent']. "</td>";
                
              } ?>
        </table>;<?php
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
<!--   ---------------------------------------------->
          <br><br>
          <h4>PlanC5 (5,00,000)</h4>
            <?php
                
$link = mysqli_connect("localhost", "root", "", "chitsdatabase");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM planc5";
             
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){ ?>
      
     <table class="table table-bordered"  > <?php
       
            echo "<tr>";
                echo "<th>Slno</th>";
                echo "<th>Email</th>";
                echo "<th>PhoneNumber</th>";
                 echo "<th>Name</th>";
               echo "<th>LeftMonths</th>";
                echo "<th>LeftAmount</th>";
                echo "<th>Status</th>";
                 echo "<th>Agent</th>";
                
            echo "</tr>";
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['Slno'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['PhoneNumber']. "</td>";
                echo "<td>" . $row['Name']. "</td>";
                echo "<td>" . $row['LeftMonths'] . "</td>";
                echo "<td>" . $row['LeftAmount'] . "</td>";
                echo "<td>" . $row['Status']. "</td>";
                echo "<td>" . $row['Agent']. "</td>";
                
              } ?>
        </table>;<?php
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
<!--   ----------------------------------------------->
      <br><br>
          <h4>PlanD10 (10,00,000)</h4>
            <?php
                
$link = mysqli_connect("localhost", "root", "", "chitsdatabase");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM pland10";
             
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){ ?>
      
     <table class="table table-bordered"  > <?php
       
            echo "<tr>";
                echo "<th>Slno</th>";
                echo "<th>Email</th>";
                echo "<th>PhoneNumber</th>";
                 echo "<th>Name</th>";
               echo "<th>LeftMonths</th>";
                echo "<th>LeftAmount</th>";
                echo "<th>Status</th>";
                 echo "<th>Agent</th>";
                
            echo "</tr>";
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['Slno'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['PhoneNumber']. "</td>";
                echo "<td>" . $row['Name']. "</td>";
                echo "<td>" . $row['LeftMonths'] . "</td>";
                echo "<td>" . $row['LeftAmount'] . "</td>";
                echo "<td>" . $row['Status']. "</td>";
                echo "<td>" . $row['Agent']. "</td>";
                
              } ?>
        </table>;<?php
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
       
    
      
        
      </div>
        
        </div>
     
      
        
    </body>
</html>

