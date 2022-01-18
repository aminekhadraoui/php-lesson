<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="" content=""/>
		<title></title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>

	<!--chat-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="prochat/script.js"></script>
<link rel='stylesheet' href="prochat/style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */


/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.apply{
	border:none;
	padding:18px;
	background-color:black;	
	color:white;
}
.apply:hover{
	background-color:#55fe00;
}
.cv{
	background-color:black;
	color:white;
}

.file-input__input {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.file-input__label {
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  border-radius: 4px;
  font-size: 14px;
  font-weight: 600;
  color: #fff;
  font-size: 14px;
  padding: 10px 12px;
  background-color: black;
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
}

.file-input__label svg {
  height: 16px;
  margin-right: 4px;
}
.statut-user{
  
}
.vert{
  border-radius:50%;
  background-color:green;
  height:15px;
  width:15px;
  margin-left:50px;
  position:absolute;
  top:15px  ;
  left:70px;
}

</style>
	</head>

<body>
	<header>
		
		<form action="search.php" method="post">
			<input type="search" placeholder="search" onkeyup="showResult(this.value)" required />
			<input type="submit" value="&#xf002;"/>
            <div id="search"></div>
		</form>
		<div class="pro-hom">
			<a href="../index.php">
				<div class="profile">
					<div class="image01"></div>
					<p><?php
                    session_start();
                    $user = $_SESSION["username"];
                    echo $user;
                    ?></p>
				</div>
			</a>
			<a href="#">
				<div class="home">
                
					<p><button class="sign-out"><a href="php/logout.php">sign out </a></button><span><!--select from notif--></span></p>
				</div>
			</a>
     
            
		</div>
	</header>
	<div class="side-right">
		<a href="#">
      
			<div class="imag01">  <div class='statut-user'>

<!-- STATUT BRO !-->
      <?php
                    
                    $con = mysqli_connect("localhost","root","","freelance");

                    if (mysqli_connect_errno()) {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      exit();
                    }
                    $user = $_SESSION["username"];
                                         
                    $sql = "SELECT * FROM connected where statut='on' and name!='$user'";
                    
                    if ($result = mysqli_query($con, $sql)) {
                      // Fetch one and one row
                      while ($row = mysqli_fetch_row($result)) {
                        echo ("<p>".$row[1]."</p><div class='vert'> </div></br>");
                      }
                      mysqli_free_result($result);
                    }
                    
                    mysqli_close($con);
                    ?>
      </div></div>

			
  
			<span>1m</span>
      
		</a>
		
		<div class="on-off">
			<i class="fa fa-user"></i>
			<div class="circle"></div>
			<p><a href="#">Turn on chat</a> to see who's available.</p>
		</div>
		<div class="shading"></div>
	</div>
	
	<div class="center-right01">
		<div class="part01">
			
			<i class="fa fa-question-circle"></i>
			
		</div>
		<div class="part02">
			<a href="#">
				<div class="imag14"></div>
			</a>
			
		</div>
	</div>
	<div class="center-right02">
		<div class="part03">
			<p></p>
			<form>
				<input type="email" placeholder="Enter name or email address" required />
				<input type="submit" value="&#xf15c; "/>
				<i class="fa fa-plus"></i>
			</form>
			
		</div>
        
		<div class="part04">
			<div class="moved">
				<a href="#"><div class="imag15"></div></a>
				<a href="#"><div class="imag16"></div></a>
				<a href="#"><div class="imag17"></div></a>
				<a href="#"><div class="imag18"></div></a>
				<a href="#"><div class="imag19"></div></a>
				<a href="#"><div class="imag20"></div></a>
			</div>	
			<p>suggested members</p>
			<a href="#">Freelance tunisie</a>
		</div>
	</div>
	<div class="center-left01">
		<div class="options">
			<a href="#">
				<i class="fa fa-pencil"></i>
				<p>Offre</p>
			</a>
			
			<!-- i  need more idea brooooooooo  fk !!!-->
			<a href="#">
				<i class="fa fa-ellipsis-h"></i>
				<p>more</p>
			</a>
			<div class="break01"></div>
			<div class="break02"></div>
			<div class="break03"></div>
		</div>
		<div class="triangle"></div>
		<div class="writing-box">
			
			<form action="index.php" method="POST">
				<textarea placeholder="DESCRIPTION..." name="new"></textarea>
      
                <button class="postnew button button2">POST</button>
                <div class="price-all">
                <label class="pricename">Price</label><input name="price" class="price" type="text">

                  </div>
              </form>
		</div>



        <!--begin -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelance";


try {

	
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	if($_POST["new"]!=""){
    $user = $_SESSION["username"];
    $news = $_POST["new"];
    $price = $_POST["price"];
    $date = date('Y-m-d H:i:s');
  $sql = "INSERT INTO job
  VALUES ('$news', '$user','$price','$date')";
  $conn->exec($sql);
  }
/*echo '<script language="javascript">';
echo 'alert("")';
echo '</script>';*/
  
  

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
<!--end -->

		<!--<div class="other-options">
			<a href="#">
				
				<button>later we test</button>
			</a>-->
			
			
			
		</div>
	</div>
	
		
           

    
	<div class="side-left01">
		<div class="name-describe">
			<a href="#">
				<h3><?php
                    
                    $user = $_SESSION["username"];
                    echo $user;
                    ?></h3>
			</a>
			<a href="#">
				<i class="fa fa-unlock-alt"></i>
				<p>
                    
                    <?php
                    
                    $con = mysqli_connect("localhost","root","","freelance");

                    if (mysqli_connect_errno()) {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      exit();
                    }
                    $user = $_SESSION["username"];
                                         
                    $sql = "SELECT * FROM sign where name='$user'";
                    
                    if ($result = mysqli_query($con, $sql)) {
                      // Fetch one and one row
                      while ($row = mysqli_fetch_row($result)) {
                        echo ($row[4]);
                      }
                      mysqli_free_result($result);
                    }
                    
                    mysqli_close($con);
                    ?>
                    
                
                
                </p>
			</a>
		</div>
		<div class="sections">
			<ul>
				<li>
					<a href="#">
						<p>test aside </p>
					</a>
				</li>
				<li>
					<a href="#">
						<p>list need more idea</p>
					</a>
				</li>
				</ul>
		</div>
		<form action="search.php" method="post">
			<input type="search" placeholder="User post search" required />
			<input type="submit" value="&#xf002;"/>
		</form>
	</div>
	<div class="side-left02">
		<p class="first">Top job</p>
		<a href="#">
			<div class="imag22"></div>
			<p>job 1</p>
			<span>0</span>
		</a>
		<a href="#">
			<div class="imag23"></div>
			<p>job 2</p>
			<span>0</span>
		</a>
		
		

<section class="avenue-messenger">
  <div class="menu">
   <div class="items"><span>
     <a href="#" title="Minimize">&mdash;</a><br>
<!--     
     <a href="">enter email</a><br>
     <a href="">email transcript</a><br>-->
     <a href="#" title="End Chat">&#10005;</a>
     
     </span></div>
    <div class="button">...</div>
  </div>
  <div class="agent-face">
    <div class="half">
     <img class="agent circle" src="../../../2.jpg" alt="Jesse Tino"></div>
  </div>
<div class="chat">
  <div class="chat-title">
    <h1>test name</h1>
    <h2></h2>
 
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <input type="text">
  <div class="message-box">
	
    <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
    
    <button type="submit" class="message-submit">Send</button>
  </div>
</div>
  </div>
<!--<div class="bg"></div>-->
<!-- partial -->


	</div>
<!--form post-->



<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="php/getjob.php" method="POST">
    <div class="container">
      <h1><?php
                    
                    $user = $_SESSION["username"];
                    echo "Name : ". $user;
                    ?></h1>
      <p>Please fill in this form </p>
      <hr>
	  <label for="email"><b>name</b></label>
      <input type="text" placeholder="Enter Email" name="user" value="<?php
                    
                    $user = $_SESSION['username'];
                    echo $user;
                    ?>"  required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

	  <!-- File upload bro !! let's style it -->
	  <div class="file-input">
      <input
        type="file"
        name="file-input"
        id="file-input"
        class="file-input__input"
      />
      <label class="file-input__label" for="file-input">
        <svg
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="upload"
          class="svg-inline--fa fa-upload fa-w-16"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            fill="currentColor"
            d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
          ></path>
        </svg>
        <span>Upload file</span></label
      >
    </div>	
	  <!-- end bro ilain bou tunis -->
      
      <p>By Applying you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn apply" >apply</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




    <?php
        $con = mysqli_connect("localhost","root","","freelance");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit(); 
}
$user = $_SESSION["username"];
                     
$sql = "SELECT * FROM job ";

if ($result = mysqli_query($con, $sql)) {
  // Fetch one and one row
  $i=0;
  while ($row = mysqli_fetch_row($result)) { 
     
    echo "<div class='center-update'>";
    
    echo "<p><a href='php/deletepost.php?user=".$row[1]."'> X</a>" . " Date and time of post : " .$row[3]."</p><hr/><p class='text'>New job from : ".$row[1]."<br/> description: ".$row[0]."</p><p>".$row[2]. " DT</p><button onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto;\" class='but'>Apply</button></div>
	
	
	
	
	
	
	
	" ;

$i++;
  }
 
}


?>
		
	</body>
</html>