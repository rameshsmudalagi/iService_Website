<?php
	if (isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
    }
    else
    {
      $message="Log In";
    }


?>


<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>iService</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">iService</a>
    </div>
    <p class="navbar-text navbar-right"><a href="#exampleModal"class="navbar-link">Login/Signup</a></p>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</nav>
 
    
    <div class="bg-overlay"></div>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a href="#"><img src="images/logo.png" alt="Circle Template">
                            <span>Here To Help You</span></a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a class="show-8" href="#">Home</a></li>
                            <li><a class="show-1" href="#">About</a></li>
                            <li><a class="show-2" href="#">Services</a></li>
                            <li><a class="show-5" href="#">Blog</a></li>
                            <li><a class="show-3" href="#">Gallery</a></li>
                             
                            <li><a class="show-4" href="#" onclick="templatemo_map();">Contact</a></li>
                            <li><a href="register.php">Register</a></li>
                            
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">
                
                <div id="menu-container">
                    
                    
                    <div id="menu-8" class="home content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="#">
                                    <h3>Here to Help you!</h3>
                                    <p>You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-users&quot;&gt;&lt;/i&gt;</strong> In varius eros ac est interdum, quis scelerisque elit semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    <br><br>Donec mattis enim sit amet nisl faucibus, eu pulvinar nibh facilisis. Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.home -->
                    
                    
                    

                    <div id="menu-1" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item">
                                        <i class="fa fa-umbrella"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-camera"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-coffee"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab1">
                                    <h3>Our History</h3>
                                    <p>Circle is free responsive website template for you. Please tell your friends about <span class="blue">template</span><span class="green">mo</span> website. Feel free to download, modify and use this template for your websites. You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong> 
                                    <br><br>
                                    Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, repellat, aspernatur nihil quasi commodi laboriosam cumque est minus minima sit dicta adipisci possimus magnam. Sit, repudiandae, ut, error, voluptates aspernatur inventore quo earum reiciendis dolorum amet perspiciatis adipisci itaque voluptatum iste laboriosam sapiente hic autem blanditiis doloribus nihil.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab2">
                                    <h3>What We Do</h3>
                                    <p>Donec quis orci nisl. Integer euismod lacus nec risus sollicitudin molestie vel semper turpis. In varius imperdiet enim quis iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac mauris aliquam magna molestie posuere in id elit. Integer semper metus felis, fringilla congue elit commodo a. Donec eget rutrum libero.
                                    <br><br>Nunc dui elit, vulputate vitae nunc sed, accumsan condimentum nisl. Vestibulum a dui lectus. Vivamus in justo hendrerit est cursus semper sed id nibh. Donec ut dictum lorem, eu molestie nisi. Quisque vulputate quis leo lobortis fermentum. Ut sit amet consectetur dui, vitae porttitor lectus.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab3">
                                    <h3>Our Team</h3>
                                    <p>Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.
                                    <br><br>Proin enim odio, eleifend eget euismod vitae, pharetra sed lacus. Donec at sapien nunc. Mauris vehicula quis diam nec dignissim. Nulla consequat nibh mattis metus sodales, at eleifend tortor tempor. Sed auctor lacus felis. </p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-1.jpg" alt="Tracy - Web Designer">
                                    </div>
                                    <h4>Tracy</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Mary - Web Developer">
                                    </div>
                                    <h4>Mary</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.about -->

                    <div id="menu-2" class="services content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-laptop"></i>
                                        <b>Mac Repairs</b>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab5" class="icon-item">
                                        
                                        <i class="fa fa-tablet"></i>
                                        <b>iPad Repairs</b>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab6" class="icon-item">
                                       
                                       <i class="fa fa-mobile"></i>
                                         <b>iPhone Repairs</b>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                

                                <div class="toggle-content text-center" id="tab4">
                                    <h3>Mac Support</h3>
                                     <p>Love your Mac? So do we. Remember your first Apple computer? It’s probably the first computer you loved instead of just used. You probably feel the same way about the Mac you’re using right now, and if that Mac is broken you’re a little heartbroken. Admit it. Mac owners feel attached to their machines.<br><br> At iService, we get that. It’s why we offer world-class Mac repair. When a Mac breaks, it’s personal. When the unthinkable happens, call us. We’ve repaired hundreds of Macs and we can fix yours. We know what you’re going through, and we’re here to help. Whether you’ve broken the screen on your Macbook Pro or can’t get your iMac to boot, we already know how to deal with your problem because we’ve seen it before. We stand behind our work. If we can’t fix it, no one can. Some of the services we offer are:<br><br>

  <ul class="fa-ul" align="left">
  <li><i class="fa-li fa fa-check-square"></i>Mac Peripheral configuration</li>
  <li><i class="fa-li fa fa-check-square"></i>Hardware enhancements</li>
  <li><i class="fa-li fa fa-check-square"></i>LCD replacement</li>
  <li><i class="fa-li fa fa-check-square"></i>Memory (RAM) Upgrade</li>
  
    <li><i class="fa-li fa fa-check-square"></i>Hard Drive repair and Upgrade</li>
  <li><i class="fa-li fa fa-check-square"></i>Apple Mac OSX installation or upgrade</li>
  <li><i class="fa-li fa fa-check-square"></i>Installing Windows on your Mac</li>
  <li><i class="fa-li fa fa-check-square"></i>Network configuration and troubleshooting</li>

 <li><i class="fa-li fa fa-check-square"></i>Data recovery from your Mac</li>
  <li><i class="fa-li fa fa-check-square"></i>Total Data Confidentiality – We will make sure that you do not lose your data!</li>
  <li><i class="fa-li fa fa-check-square"></i>Fastest turn around time! • So much more: just ask.</li>

</ul>
                                         <br>
<p>Get your Macbook Pro or other Apple Notebook on the road to recovery with iService’s MacBook Pro, MacBook and Powerbook repair services! We specialize in MacBook repairs such as screen replacement and MacBook Pro glass replacement!<br><br>

    Our MacBook Pro repair service has fixed many client’s computers who have damaged their MacBook Pros in many ways. The MacBook Pro is highly susceptible to broken screens and cracked glass above the LCD Screen. iService specializes in replacing broken glass screens on all models of the MacBook Pro. Even if you broke both the outer glass AND the LCD screen underneath, iService can repair that as well.<br><br>

Whether you broke your MacBook Pro by dropping it and breaking the screen or if you want a hard drive upgrade, iService is the most dependable and trustworthy place to go for MacBook repairs and upgrade services.Get started on your MacBook repairs by filling in the contact form.</p>



                                         
                                    
                                </div>

                                <div class="toggle-content text-center" id="tab5">
                                    <h3>iPad Support</h3>
                                    <p>We replace any damaged hardware on your iPad.
                                    <br><br>Some of the common issues related to iPad’s are:</p><br>
<ul class="fa-ul" align="left">
  <li><i class="fa-li fa fa-check-square"></i>Battery</li>
  <li><i class="fa-li fa fa-check-square"></i>Touch Screen / Digitizer</li>
  <li><i class="fa-li fa fa-check-square"></i>LCD / Liquid Crystal Display</li>
  <li><i class="fa-li fa fa-check-square"></i>Displays (including retinas)</li>
  
<li><i class="fa-li fa fa-check-square"></i>Cameras</li>
  <li><i class="fa-li fa fa-check-square"></i>Home button</li>
  <li><i class="fa-li fa fa-check-square"></i> Outer Panels</li>
</ul>

                                </div>
                                
                            <div class="toggle-content text-center" id="tab6">
                                    <h3>iPhone Support</h3><p>We replace any damaged hardware on your iPad.
                                    <br><br>Some of the common issues related to iPad’s are:</p><br>
<ul class="fa-ul" align="left">
  <li><i class="fa-li fa fa-check-square"></i>Battery</li>
  <li><i class="fa-li fa fa-check-square"></i>Touch Screen / Digitizer</li>
  <li><i class="fa-li fa fa-check-square"></i>LCD / Liquid Crystal Display</li>
  <li><i class="fa-li fa fa-check-square"></i>Displays (including retinas)</li>
  
<li><i class="fa-li fa fa-check-square"></i>Cameras</li>
  <li><i class="fa-li fa fa-check-square"></i>Home button</li>
  <li><i class="fa-li fa fa-check-square"></i> Outer Panels</li>
</ul>
                                </div>
                                
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->

                    <div id="menu-3" class="gallery content">
                        <div class="row">
                            
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g1.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g1.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g2.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g2.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g3.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g3.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g4.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g4.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g5.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g5.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g6.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g6.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g7.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g7.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g8.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g8.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g9.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g9.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->

                        </div> <!-- /.row -->
                    </div> <!-- /.gallery -->

                    <div id="menu-4" class="contact content">
                        <div class="row">
                        	
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Contact Us</h3>
                                    <p>Donec mattis enim sit amet nisl faucibus, eu pulvinar nibh facilisis. Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem.
                                    <br><br><strong>Address:</strong> 123 Thamine Street, Digital Estate, Yangon 10620, Myanmar
                                    <br><strong>Email:</strong> info@company.com | <strong>Tel:</strong> 010-020-0340</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                            
                            <div class="col-md-12">
                                <div class="google-map">
                                </div> <!-- /.google-map -->
                            </div> <!-- /.col-md-12 -->
                            
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
                                    	<form action="#" method="post">
                                            <fieldset class="col-md-4">
                                                <input id="name" type="text" name="name" placeholder="Name">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="email" name="email" id="email" placeholder="Email">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="Subject">
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <input type="submit" name="send" value="Send Message" id="submit" class="button">
                                            </fieldset>
                                        </form>
                                    </div> <!-- /.row -->
                                </div> <!-- /.contact-form -->
                                
                                </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->                
                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">Copyright &copy; 2084 <a href="#">rService</a></p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'images/Iphone-5S-white.jpg'
                        }, {
                            image: 'images/iphone6plusdali.jpg'
                        }, {
                            image: 'images/iphone6s-rendering.jpg'
                        }, {
                            image: 'images/iphone-6-design2.png'
                        }
                    ]

                });
            });
            
    </script>
    
    	<!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <!-- Google Map Init-->
        <script type="text/javascript">
           function templatemo_map() {
                $('.google-map').gmap3({
                    marker:{
                        address: '16.8496189,96.1288854' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            }
        </script>
</body>
</html>