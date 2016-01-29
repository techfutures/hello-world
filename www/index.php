<!doctype html>
<html lang="en">

  <head>
  
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0;">
          
          <!-- FAVICON -->
          <link rel="shortcut icon" href="assets/favicon.ico">
          
          <!-- PAGE TITLE -->
          <title>Hello World - Powered  by Tech Futures</title>
          
          <!-- GOOGLE FONTS -->
          <link href="http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,300,600,700|Montserrat:400,700" rel="stylesheet" type="text/css">
          
          <!-- STYLESHEETS -->
          <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
          <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
          <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
          <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
              
  </head>
  <body>
  
   <?php
      $base_grant_url = urldecode($_GET['base_grant_url']);
      $user_continue_url = urldecode($_GET['user_continue_url']);
      $override_continue_url = 'http://mycompany.com/you_are_now_authenticated';
      
      $override_the_users_request = false;
      if ($override_the_users_request) {
        $grant_url = $base_grant_url . "?continue_url=" . urlencode($override_continue_url);
      } else {
        $grant_url = $base_grant_url . "?continue_url=" . urlencode($user_continue_url);
      }

      // The following parameters may be used for tracking purposes. They are not necessary for authentication.
      $node_id = urldecode($_GET['node_id']);
      $gateway_id = urldecode($_GET['gateway_id']);
      $client_ip = urldecode($_GET['client_ip']);
    ?>
  
      <!-- BACKGROUND -->
      <div id="bg-pattern"></div>
      <div id="bg-darker"></div>
      <!-- /BACKGROUND -->
      
      <!-- PRELOADER -->
      <div id="prelaoder">
        <div class="spinner"><div class="spinner-inner"></div></div>
      </div>
      <!-- /PRELOADER -->
      
       
      <!-- HOME -->
      <section id="home">
      
      <a class="tubular-mute"><i class="fa fa-volume-down"></i></a>
      
          <div class="content-block">
            <div class="col-lg-3">
            
              <p>Powered by</p>
              <hr class="logo">
            
              <img class="img-responsive" src="assets/img/logo.png" alt="Divison Logo">
              <img class="img-responsive" src="assets/img/logo-text.png" alt="Divison Name">
             
              
            </div>   
            
            <div class="col-lg-9">
              <div id="slider">
              
                 <div class="slide"> <h1><span>Hello World!</span></h1> </div>
               
               
              </div>
              
              <?php if($_ENV["HOSTNAME"]) {?><h1>My hostname is <?php echo $_ENV["HOSTNAME"]; ?></h1><?php } ?>
                
  
              <hr class="large">
              <h4>Thank you for using CloudSingularity Cortex, powered by Tech Futures.</h4>
              
            </div>
          </div>
           
      </section>
      <!-- /HOME -->
      
      
      
      <!-- FOOTER -->
      <div id="footer" class="hidden-xs">
          
            <p>Tech Futures Interactive Inc. © 2016</p> |
        <a href="#"><p id="open-overlay">About & Contact</p></a>
            
        <div class="modal fade" id="privacy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Terms of use</h4>
                  </div>
                  <div class="modal-body">
                    A copy of the terms can be found in <a href="terms_of_use.pdf">pdf form</a>.
                  </div>
                </div>
              </div>
            </div>
  
      </div>
      <!-- /FOOTER -->
      
      
      
      <!-- OVERLAY -->
      <div id="overlay">
      
        <!-- OVERLAY-ABOUT -->
        <section id="overlay-about" class="overlay-content">
             <div class="container">
               <button type="button" id="close-overlay">Close</button>
                 
                <div class="row">
                    <h1>About</h1>
                </div>
                
                <div class="row">
                  <div class="col-lg-12">
                    <p>
                    What is "CloudSingularity"? It is our brand for all our network/internet solutions, otherwise known as CloudSingularity [insert name of solution]. So in this case, <strong>open</strong> and accessible Wi-Fi (internet). <br><br>
                      Tech Futures Interactive Inc. is a small, talented and passionate company, headquartered in Beautiful British Columbia. We offer a wide range of services including, cloud desktops, unified communications, internet services, cloud hosting, computer technology and consulting. And all designed to be accessible to organizations of all sizes, even individuals and students.
<br><br>
Our mission is to provide you a solutions that is Simple, Empowers and Drives you to Succeed.
<br><br>
Enter your email below and follow us on social media to get updates on when we launch new locations!
                    </p>
                  </div>
                </div>
                
                <form action="assets/subscribe.php" method="post" class="subscribe-form">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group input-group-lg">
                          <input type="text" name="email" placeholder="your@mail.com" class="email form-control">
                          <div class="input-group-btn">
                          <button type="submit" class="btn btn-primary">Subscribe</button>
                          </div>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="status-message"></div>
    
                <div class="row">
                  <ul class="social-icons">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div>
                
                <div class="row">
                  <p class="copyright">2016 © Tech Futures Interactive Inc. All rights reserved.</p>
                </div>
                  
                      
             </div>
        </section>
        <button type="button" id="open-contact"><i class="fa fa-angle-double-down"></i></button>
        <!-- /OVERLAY-ABOUT -->
        
        
        
        
        <!-- OVERLAY-CONTACT -->
        <section id="overlay-contact" class="overlay-content">
          <button type="button" id="close-contact"><i class="fa fa-angle-double-down"></i></button>
           <div class="container">
           
             <h1>CONTACT</h1>
             <span class="border"></span>
             
             <p>
               Want to say hello? 
               Want to know more about us? 
               Send us an email with your questions and we will answer back to you as soon as we can.
             </p>
             
             
             <div class="contact-form">
             
               <form action="assets/sendmail.php" method="post">
                  <div class="control-group">
                    <label for="name" class="nameLabel">Name</label>
                    <input id="name" type="text" name="name">
                  </div>
                  <div class="control-group">
                    <label for="email" class="emailLabel">Email</label>
                    <input id="email" type="text" name="email">
                  </div>
                  <div class="control-group">
                    <label for="message" class="messageLabel">Message</label>
                    <textarea id="message" name="message"></textarea>
                  </div>
                  <div class="control-group">
                    <button type="submit">Send</button>
                  </div>
               </form>
               
               <h1 class="status-message-contact"></h1>
             </div>
                   
           </div>
        </section>
        <!-- /OVERLAY-CONTACT -->

      </div>
      <!-- /OVERLAY -->

      
      <!-- JAVASCRIPTS -->
      <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.cycle.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.tubular.js"></script>
      <script type="text/javascript" src="assets/js/scripts.js"></script>

  </body>

</html>