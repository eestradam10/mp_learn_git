<?php
$username = "";
$password = "";
if(isset($_POST['username']) && isset($_POST['pwd'])) {
	$username = $_POST['username'];
	$password = $_POST['pwd'];
} else {
	//Scream at the screen.
}
if($username == "admin" && $password == "admin1") {
	setcookie("usertype", "administrator", time()+3600);
	header("Location: ./AdminHome.html");
}
if($username == "user" && $password == "user1") {
	setcookie("usertype", "student", time()+3600);
	header("Location: ./StudentHome.html");
}
?>
<html>
    
    <head>
        <title>My.Advising 2.014</title>
        <link rel="stylesheet" type="text/css" href="AAMS.css">  
    </head>
    

    <body>
        <div id="frame">          
            
         <div id="banner">
            <img src="https://lh5.googleusercontent.com/-bXx3etcWhO8/VBibXYwkpGI/AAAAAAAAAmY/81p5CCLobU0/w1422-h889-no/banner.jpg" width="100%" height="165px";>  
         </div>
         

        <div id="logo">
        <img src="https://lh6.googleusercontent.com/-BdAL0rzVUXQ/VBibXqEr_-I/AAAAAAAAAmc/5APOMst47BE/w587-h207-no/myadvising.png" width="250px";>  
        </div>
            

        <div id="description">
            <p>My.Advising 2.014 System is a secure web interface that manages the course advising process in the Computer Science Department. The system shall be able to assign a number of students to each advisor, keep track of the advising appointments, and send status notifications to the users via email. </p>
            <!-- <p> The system shall be able to assign a number of students to each advisor, keep track of the advising appointments, and send status notifications to the users via email. </p> -->
		 <!-- 	<?php // echo "Testing to see if PHP is being parsed"; ?>
			Test
             -->
        </div> 

     <div id="login">
            <h2>LOGIN</h2>
            <form>
                <form method="POST" name="login" action="./MyAdvising.php" >
                <input type="text" placeholder="Enter your username" name="username"><br>
                <input type="password" placeholder="Enter your password" name="pwd"><br>
                <input type="button" value="Login">
            </form>
                        
    </div>
      
        <div id="options">
            <a href="http://utep.edu/"><b>UTEP</b></a>
            <a href="http://cs4342.cs.utep.edu/team10/AboutUs.html"><b>ABOUT US</b></a>
            <a href="http://cs4342.cs.utep.edu/team10/ContactUs.html"><b>CONTACT US</b></a>
        </div>
         
        
        </div>
        <div id="footer">
                
        <img src="https://lh5.googleusercontent.com/-bXx3etcWhO8/VBibXYwkpGI/AAAAAAAAAmY/81p5CCLobU0/w1422-h889-no/banner.jpg" width="100%" height="20px";>
        
        </div>
            
          <div id="footer2">
        <img src="./logo2.png" alt="overseas logo">        
<!--         <h5>Overseas Technology Inc 2014</h5> -->  
        </div>
            
        </div> <!-- End Frame -->
        
    
        
    </body>
    
    
    
</html>
