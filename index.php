<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dolly-Food Delivery Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">

  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">
   <div class="Container">
         <?php include'header.html'?>
               <section class="site-homepage">
                   <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
                     <ol class="carousel-indicators">
                       <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                       <li data-target="#carouselIndicators" data-slide-to="1"></li>
                       <li data-target="#carouselIndicators" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner" role="listbox">
                       <div class="carousel-item active" style="background-image: url(Images/r1.jpg);  filter: blur(5px);
                       -webkit-filter: blur(5px);"></div>
                        <div class="carousel-caption text-center">
                          <h1>Welcome to Dolly-FOS</h1>
                          <h3>Order here and be served in a few minutes</h3>
                          
                          <a class="bth btn-lg btn-outline-danger" href="shopping.php">Make an order</a>
                          
                        </div>
                      <div class="carousel-item" style="background-image: url(Images/bg.jpg);  filter: blur(5px);
                      -webkit-filter: blur(5px);"></div>
                      <div class="carousel-item" style="background-image: url(Images/h1.jpg);  filter: blur(5px);
                      -webkit-filter: blur(5px);"></div>
                     </div>
                     <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </a>
                      <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         </a>
                   </div>
                 </section>
               <br>
                 <section>
                   <div id="about">
                    <div class="container container-fluid"  >
                      <div class="row no-padding" >
                        <div class="col-md-6" style="padding:50px;">
                          <h4 class="site-sub-title" >Our Story</h4>
                          <h2 class="site-primary-title display-4">Welcome</h2>
                          <p>We have one interesting storz to share qith Zou about how Dolly FOS is borned. The owners, two sisters Numanovic, who 
                              were studying and living in Sarajevo has their favorite place where thez usually had meal. Once, they wanted to eat but they were too much bussy
                              they decided to order the food from the resrorant thez prefer. And...
                          </p>
                          <p><a class="bth btn-lg btn-outline-danger"href="about.php">Learn more</a></p> 
                          
                        </div>
                        <br>
                        <div class="col-md-6 zoom" style="padding:50px;">
                          <img class="img-fluid" src="Images/about_img_1.jpg" alt="Chef" >
                      </div>
                    </div>
                    </div>
                  </section>
                  <br>
                  <section>
                    <div id="menu">
                     <div class="jumbotron container-fluid">
                      <div class="row">
                        <div class="col-md-12 text-center mb-5 site-animate" style="padding:50px;">
                          <h4 class="site-sub-title">Our Offers</h4>
                         <div class="col-md-12" style="bottom-margin:400px;">
                            <a class="bth btn-lg btn-outline-danger" href="menu.php">See more &#8680;</a>
                          </div>
                          <h2 class="display-4">Our Spring 2019 offers</h2>
                        <div class="heading-underline"></div>
                        <div class="row no-padding">
                       
                          <div class="card col-md-3 zoom" style="width: 15rem;">
                            <img class="card-img-top" src="Images/chicken1.jpg" alt="Card image cap" width="286" height="180">
                              <div class="card-body">
                                <h5 class="card-title">SpecialOffer</h5>
                                  <p class="card-text">Grilled chicken</p>
                                  
                              </div>
                          </div>
                          <div class="card col-md-3 zoom" style="width: 15rem;">
                            <img class="card-img-top" src="Images/p1.jpg" alt="Card image cap" width="286" height="180">
                            <div class="card-body">
                              <h5 class="card-title">Sesamy</h5>
                                <p class="card-text">Chicken with sesam and yogut sos</p>
                                
                            </div>
                          </div>
                          <div class="card col-md-3 zoom" style="width: 15rem;">
                            <img class="card-img-top" src="Images/1.jpeg" alt="Card image cap" width="286" height="180">
                            <div class="card-body">
                              <h5 class="card-title">Grilled chicken</h5>
                              <p class="card-text">Grelled chciken withs salat</p>
                              
                              </div>
                          </div>
                          <div class="card col-md-3 zoom" style="width: 15rem;">
                            <img class="card-img-top" src="Images/p2.jpg" alt="Card image cap" width="286" height="180">
                            <div class="card-body">
                              <h5 class="card-title">AvokChi</h5>
                              <p class="card-text">Chicken with Avokado salat</p>
                              

                            </div>
                            <!-- <div class="col-md-12" style="bottom-margin:400px;">
                            <a class="bth btn-lg btn-outline-danger" href="menu.php">See more &#8680;</a>
                          </div> -->
                          </div>
                               
                     </div>
                      
                   </div>
                      
              </section>
              <br>
              <section class="mb-4" id="contact" >
<h2 class="h1-responsive site-primary-title display-4 text-center " style="padding:100px;">Contact us</h2>

<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">


    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

       
            <div class="row">

           
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name...">
                        
                    </div>
                </div>
             

                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-mail@com">
                        
                    </div>
                </div>
             

            </div>
         

           
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Title">
                        
                    </div>
                </div>
            </div>
         

          
            <div class="row">

               
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message..."></textarea>
                        
                    </div>

                </div>
            </div>


        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary" style="float:right; color:white;" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>

   
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Sarajevo City Center</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+387 62 58 51 86</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p><a href="mailto:name@email.com">managementdollzfos@fos.com</a></p>
            </li>
        </ul>
    </div>
</div>

</section>
                     
                  
                   <section>
                          <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.021639774868!2d18.405983415013324!3d43.85538014735212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c8df25ac110b%3A0xb1cd13f8b38c755a!2sSarajevo+City+Center!5e0!3m2!1sbs!2sba!4v1556811013229!5m2!1sbs!2sba" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="container" style="text-align:center; height:50px;">
      <div class="social-img" >
          <a class="fb-ic mr-3" role="button" href="www.facebook.com"><i class="fab fa-lg fa-facebook-f"></i></a>
          <a class="ins-ic mr-3" role="button" href="www.facebook.com"><i class="fab fa-lg fa-instagram"></i></a>
      </div>
    <div class="footer-menu">
      <ul class="footer-links col-md-12">
        <li>
          <a> Privacy</a>
        </li>
        <li>
          <span>
            |
          </span>
        </li>
        <li>
            <a> Cookies</a>
          </li>
          <li>
              <span>
                |
              </span>
            </li>
          <li>
              <a> Conditions</a>
            </li>

      </ul>
    </div>
    <div>
        <span>&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Graduation Project</span>
      </div>         
    </div>   
                        </section>
                        
                        
                        
           
      
              
 

   <!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
<script>
  function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.getElementById('status').innerHTML = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.getElementById('status').innerHTML = "Email cannot be empty";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.getElementById('status').innerHTML = "Email format invalid";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.getElementById('status').innerHTML = "Title cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.getElementById('status').innerHTML = "Message cannot be empty";
      return false;
  }
  document.getElementById('status').innerHTML = "Sending...";
  document.getElementById('contact-form').submit();

  }
</script>
  </body>
  </html>