<?php
// Starting session
session_start();
?>
<!doctype html>
<html lang="en">
<head>
     <title>
        Balaji Chits
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
         
       
    
       
    <!---------------Navgition Bar-------------->

        <section id = "Nav-Bar">
            
    <nav class="navbar fixed-top navbar-expand-lg navbar-light    bg-light scrolling-navbar">
        
  <a class="navbar-brand" href="#"><img src="Images/logo.png"></a>
        
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      
    <span class="navbar-toggler-icon"></span>
  </button>
        
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=#About>ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ChitPlans">CHITS PLANS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#WAChit">WHAT IS CHIT</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#FAQS">FAQS</a>
      </li>
         
            <li class="nav-item">
        <a class="nav-link" href="#Interestetdtojoin">INTERESTED TO JOIN</a>
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
                  <?php }else if( $value[1] == "Agent")
                   { ?>
    <a class="dropdown-item" href="AgentDashBoard.php">
        <?php echo "$value[0]"; ?></a> 
                        
              <?php    }else
                   {?>
      <a class="dropdown-item" href="AdminDashboard.php">
        <?php echo "$value[0]"; ?></a> 
                       
                 <?php
                   }
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
        
        
        
    <!----------------Slider--------------------->
    <div class="slider">
    
    <div id="imageSlider" class="carousel slide" data-ride="carousel">
            
  <ol class="carousel-indicators">
    <li data-target="#imageSlider" data-slide-to="0" class="active" ></li>
    <li data-target="#imageSlider" data-slide-to="1"></li>
    
  </ol>
            
            
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/banner1.jpg" class="d-block w-100" alt="Unable to Load">
      <div class="carousel-caption d-none d-md-block">
      <h4 style="fontcolor:white">Welcome to</h4><h2> Balaji Chits</h2>
      </div>
    </div>
      
    <div class="carousel-item">
      <img src="Images/banner2.jpeg" class="d-block w-100" alt="Unable to Load">
      <div class="carousel-caption d-none d-md-block">
        <h2></h2>
        <h4 style="fontcolor:white">Welcome to</h4><h2> Balaji Chits</h2>
      </div>
    </div>
      
   
      
  </div>
            
  <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
 
        </div>
        
     <!---------------About---------------------->
        <section id="About" style="margin: 0px 0px;">
            <div class="container" style="padding-bottom:20px;;">             
                        <div class="AboutContent">
                        <h2 >About</h2>
                        Balaji chits is a registered private limited company, started its business in a modest way in Warangal; has grown through professionalism, hard work, selfless service and prudent management.

We have a strong team of highly skilled, experienced and trustworthy professionals to serve our customer needs.

Trust is a word, which is a synonym for Lenaxis. Over the years Lenaxis has gained the reputation of being a solid saving and support system that values every rupee its subscriber saves. Lenaxis attributes its growth to the trust and reliability that the company has been standing for. We are proud to be recognized as a trustworthy organization and we will continue to give service to all our subscribers in the same manner.
          
        <button type="button" class="btn btn-success" style="float: right; ">Read More..</button>
                            </div> 
                    </div>
        </section>
       
        
    <!-------------Chit Plans------------------>
        <section id="ChitPlans" style="margin: 0px 0px;padding-top: 60px;padding-bottom: 30px;">
            <div class="container">
            <h2 style="margin-bottom: 20px;">Chit Plans</h2 >
                <div class = "row services">
                    <div class="col-md-3 text-center" >
                        <div class="box">
                    <ul style="list-style: none;text-align: left;padding-left: 40px;">
                    <li>  Chit Value: <h4>1,00,000</h4></li>
                     <li>   Months: <h4>25</h4> </li>
                     <li>Subscription Amount: <h4>4,000</h4> </li>
                   <a href="#Interestetdtojoin" style="color:white"> <i class="fa fa-chevron-circle-right" style="float: right;font-size: 42px;margin-top:  -30px"></i></a>   
                </ul>
                    
                            
                            
                        </div>
            </div>
            <div class="col-md-3 text-center" >
            <div class="box">
                <ul style="list-style: none;text-align: left;padding-left: 40px;">
                    <li>  Chit Value: <h4>2,00,000</h4></li>
                     <li>   Months: <h4>40</h4> </li>
                     <li>Subscription Amount: <h4>5,000</h4> </li>
                   <a href="#Interestetdtojoin" style="color:white">  <i class="fa fa-chevron-circle-right" style="float: right;font-size: 42px;margin-top:  -30px"></i></a>
                </ul>
                </div>         
            </div>
            <div class="col-md-3 text-center" >
            <div class="box">
            <ul style="list-style: none;text-align: left;padding-left: 40px;">
                    <li>  Chit Value: <h4>5,00,000</h4></li>
                     <li>   Months: <h4>50</h4> </li>
                     <li>Subscription Amount: <h4>10,000</h4> </li>
                <a href="#Interestetdtojoin" style="color:white" > <i class="fa fa-chevron-circle-right" style="float: right;font-size: 42px;margin-top:  -30px"></i></a>
                </ul>
            </div>
                    </div>
            <div class="col-md-3 text-center" >
            <div class="box">
            <ul style="list-style: none;text-align: left;padding-left: 40px;">
                    <li>  Chit Value: <h4>10,00,000</h4></li>
                     <li>   Months: <h4>40</h4> </li>
                     <li>Subscription Amount: <h4>25,000</h4> </li>
              <a href="#Interestetdtojoin" style="color:white"> <i class="fa fa-chevron-circle-right" style="float: right;font-size: 42px;margin-top:  -30px"></i></a> 
                </ul>
            </div>
                           
                            
            </div>

                </div>
            </div>
        </section>
        
      <!--------------What is Chit-------------->
        <section id="WAChit" style="margin: 0px 0px">
            <div class="container">
          
                <div class = "row services">
                    <div class="col-md-4 text-center" >
                        <div class="Servicebox" >
                            <h6>WHAT</h6>
                               <h4>IS A CHIT?</h4> 
                          <p>  A Chit fund is a kind of savings scheme practiced in India. A chit fund company is a company that manages, conducts, or supervises a chit schemeas defined in Section of the Chit Funds Act, 1982</p><br>
                            
                            <button type="button" class="btn btn-info">Read More</button>
                            
                            
                        </div>
            </div>
                   <div class="col-md-4 text-center" >
                       <div class="Servicebox">
                          <h6>Wy</h6>
                               <h4>CHIT?</h4> 
                       <p>    CHIT provides a good source of finance for different type of people viz., small investors, businessmen, small scale industrialists etc. A Chit is the Only Financial Product that allows you to Save and Borrow.</p>
                                <button type="button" class="btn btn-info">Read More</button>                       

                       </div>         
            </div>
                   <div class="col-md-4 text-center" >
                       <div class="Servicebox">
                           <h6>HOW</h6>
                               <h4>CHIT WORKS?</h4> 
                       <p>   The basic necessity of conducting a ‘Chitty’ is a group needy people called subscribers. The foremanthe company or person conducting the chittybrings these people together and conducts the chitty.</p> 
                           <button type="button" class="btn btn-info">Read More</button>     
                       
                       </div>
            </div>
             
                            
            </div>
            </div>
        
        </section>
            
          <!-----------------FAQ'S---------->
        <section id = "FAQS">
            <div class = "FContainer">
              <h3 style="font-weight: 100px;"> FAQ'S
                </h3>
                 <div class="container">
           
                <div class = "row">
                    <div class="col-md-6 text-center" >
                        <div class="FAQBox">
                               
                <details>    
             <summary>How safe is my money with Balaji Chit Funds ?</summary>
             <p>Safety of one’s money in the hands of another person depends on the honesty and integrity of the person managing your funds. Balaji Chit Funds working history of over 31 years reveals that they have not defaulted in repayment of any person’s money. In stray cases of delayed payments, interest for delay has been paid in all cases.
                            </p>   </details>
                            
            <details>
             <summary>What should I join Balaji Chit Funds?</summary>
    <p>Balaji Chits is a professionally managed company in the service of its subscribers for over 31 years. It has been in this business since 1981. It is backed by a well diversified group, the Balaji Group which has interests in Real Estate, Media, Information Technology, Construction, Agriculture, Horticulture, Diary, Bread Manufacturing, Ayurvedic Hospital, Tours and Travel etc. The group is socially responsible. It supports a non -profit cancer hospital and provides scholarships to poor meritorious students.In addition Balaji Chits in the interest of its subscribers offers a discount of 0.5% of the installment, if the installments are paid at the Balaji Branch Office before the 10th of every month. There is also a provision for payment at any Balaji Chit Fund Branch or collection of the monthly installments from your doorstep. There are also plans for online payment.</p></details>
                            <details>
                            <summary>How is a chit fund a better saving option?</summary>
                      <p>By joining a chit fund, a person is forced to save a small part of his income, to meet his planned/unplanned investments or expenditure. In case of contingency, borrowing from the chit fund is much easier, simpler, faster and cheaper. In case a person wants to save till the last, the return a subscriber gets by way of chit dividends is much higher.
                            </p> </details>
                            
                            <details>
                   <summary>What are the benefits ?</summary>
                      <p>Persons who want to save money and receive the prized/bid amount in the second half of the chit period, earn very much higher return (12-18% per year) than their periodic savings kept with a bank.
Those in need of money are able to raise money by receiving the prized/bid amount when they are in need of money. The interest or chit loss in such cases is very much less than the market rates.
                            </p> </details>
                            
                            <details>
                            <summary>What isa an auction?</summary>
                      <p>Auction is a procedure for identification of the non-prized subscriber who wants to take a chit amount at the highest permissible discount. All non-prized subscribers who have paid their installments up to date are allowed to participate in the auction for bidding up to the highest auction discount, within a period of five minutes allowed for each auction. 
                                </p> </details>
                            <details>
                    
                    <summary>What is a lot ?</summary>
                      <p>When more than one non-prized subscriber wants to take the chit amount at the same discount, the chit numbers (coins) of all such non-prized subscribers are put in a container and the successful bidder is identified by removing one number (token coin) from the said container. The procedure is known as lot or lottery.
                            </p>      
                            </details>
                            
                            
                        </div>
            </div>
                   <div class="col-md-6 text-center" >
                       <div class="FAQBox">
                            <details>
                    
                    <summary>What is coming to open?</summary>
                      <p>When there is no member in the chit group who is willing to receive the prized/bid amount at the maximum allowable discount, the bidding for the chit comes in for open auction. This is known as coming to open. 
                            </p>      
                            </details>
                            <details>
                    
                    <summary>How many chits can i take in chitgroup?</summary>
                      <p>A subscriber can participate in not more than three chits in the same chit group.
                            </p>
                    
                            </details>
                            <details>
                    
                    <summary>How many modes of payment ??</summary>
                      <p>Cash, cheques, demand draft, pay order and bank transfer are accepted modes of payment. 
                            </p>
                    
                            </details>
                            <details>
                    
                    <summary>Can i Withdraw from a chit after becoming member?</summary>
                      <p>When a subscriber withdraws, the foreman has to find an alternate subscriber in his place. Until then the chit fund company has to arrange funds on behalf of such a defaulting subscriber, for payment to a prized subscriber each month. Hence withdrawal is permitted, but the actual amount paid by the subscriber in the chit minus company commission will be repaid to such a defaulting subscriber at the end of the chit period. 
                            </p>
                    
                            </details>
                               </div>         
            </div>
                   
             
                            
            </div>
            </div>
              
            </div>
            
        </section>
     <!-----------------Interested to join---------->
        <form method="post"> 
        <section id = "Interestetdtojoin">
            <div class = "IContainer">
              <h3 style="font-weight: 100px;margin-top: 10px">  I'm Interested to join
                </h3>
                <div class="mm" style="float: center;padding: 20px;">
                    
        <div class="row services">
        <div class="col-md-6 text-center">
            
            <input type="text" name="Name" placeholder="Name" class="form-control"  style="margin: 10px" required>
            
            <input type="text" name="Email" class="form-control" placeholder="Email" style="margin: 10px" required>
            
            <input type="text" name="PhoneNumber" class="form-control" placeholder="Phone Number" style="margin: 10px" required>
            
                    </div>
                    <div class="col-md-6 text-center">
                       
            <input type="text" name="Address" class="form-control" placeholder="Address"style="margin: 10px" required>
                        
        <input type="text" name="Message" class="form-control" placeholder="Message(optional)" style="margin: 10px">
                       
     <div class="row" style="margin-left:  10px;" >
     <div class="col-md-3">
        
    
   <select class="custom-select" name="Plan" id="inputGroupSelect01" required>
    <option selected hidden>Select Plan...</option>
    <option value="1,00,000">1,00,000</option>
    <option value="2,00,000">2,00,000</option>
    <option value="5,00,000">5,00,000</option>
    <option value="10,00,000">10,00,000</option> 
  </select>

        </div>   
                           
   <div class="col-md-3">
    <button type="submit" name="contactMe" class="btn btn-info">Contact Me</button>
       
       <?php
if(isset($_POST["contactMe"]))
{
    
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$PhoneNumber= '91'.$_POST['PhoneNumber'];
$Address=$_POST['Address'];
$Message=$_POST['Message'];
$Plan=$_POST['Plan'];

     
$username="root";
$servername="localhost";
$password="";
$dbname="chitsdatabase";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
	echo "connection error";


        
$sql="insert into interestedpeople(Name,Email,PhoneNumber,Address,Message,Plan)
values('$Name','$Email','$PhoneNumber','$Address','$Message','$Plan')";
 
      
// Account details
$apiKey = urlencode('27cT9HD5CAM-rvXpjEbNcYuAFYAPpx7NTvqQOMOPd2');
// Message details
$numbers = array($PhoneNumber);
$sender = urlencode('BCF');
$message = rawurlencode("HI $Name Thanks for Contacting us we will get back to you very soon  !Thanks Balaji Chit Funds.");
 
$numbers = implode(',', $numbers);
 
// Prepare data for POST request
      
$data = array('apikey' => $apiKey, 'numbers'=> $numbers, "sender" => $sender, "message"=> $message);
      
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;

  
if($conn->query($sql)==true)
{
echo "sUCCESS";
}
 else
 {
    echo "Error -This Email is already Registered:";    }

$conn->close();
  }
?>
 
                           </div> </div>               
               </div>
                         
 
    
</div>
                    </div>
                </div>
                    
                    
         
        </section>
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
                        WARANGAL
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
                &copy COPYRIGHT2020 DESIGNED BY Vee Technology Private Limited.
            </div>
        
        </footer>
        
    </body>
</html>

