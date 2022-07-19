<!DOCTYPE html>
<html lang="en">
   <?php
   require_once '../config/conexion.php';
   $query = "select * from shoe";
   $resultado = mysqli_query($conexion,$query);
   $query2 = "select * from tittles";
   $resultado2 = mysqli_query($conexion,$query2);
   include 'head.php';
   $query3 = "select * from descriptions";
   $resultado3 = mysqli_query($conexion,$query3);
   $query4 = "select * from descriptions";
   $resultado4 = mysqli_query($conexion,$query4);
   $query5 = "select * from descriptions";
   $resultado5 = mysqli_query($conexion,$query5);
   $query6 = "select * from descriptions";
   $resultado6 = mysqli_query($conexion,$query6);
   $query7 = "select * from tittles";
   $resultado7 = mysqli_query($conexion,$query7);


   
   
   ?>
   
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../public/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->  
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header-top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="../public/images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                           <div class="limit-box">
                              <?php
                              include 'nav.php';
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div class="banner_main">
                  <div class="container">
                     <div class="row d_flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                           <div class="text-bg">
                              <?php foreach($resultado as $row){ ?>
                           
                              <h1>
                                 <?php echo $row['name'];?>


                              </h1>
                              <?php } ?>
                              <?php foreach($resultado2 as $row){ ?>
                              <span><?php echo $row['top'];?> <br>
                              <?php } ?> 
                              <strong class="land_bold">Infographic & Review</strong></span>
                              <a href="#">Contact Us</a>
                           </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="text-img">
                              <figure><img src="../public/images/af1.png" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
         </section>
         
         </div>
      </header>
      <!-- Best  -->
      <div id="jewellery" class="Best">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Description</h2>
                     <?php foreach($resultado3 as $row){ ?>
                     <p> <?php echo $row['intro'];?></p>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="best_main">
                     <div class="row d_flex">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="best_text">
                           <?php foreach($resultado4 as $row){ ?>
                              <p><?php echo $row['upper'];?></p>
                              <?php } ?>
                              <a href="#">See More</a>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                           <div class="best_img">
                              
                              <figure><img src="../public/images/above.jpg"></figure>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="best_main">
                     <div class="row d_flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                           <div class="best_img croos_rt">
                              
                              <figure><img src="../public/images/side.jpg"></figure>
                           </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="best_text flot_left">
                           <?php foreach($resultado5 as $row){ ?>
                              <p><?php echo $row['side'];?></p>
                              <?php } ?>
                              <a href="#">See More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="best_main pa_bot">
                     <div class="row d_flex">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="best_text">
                           <?php foreach($resultado6 as $row){ ?>
                              <p><?php echo $row['front'];?></p>
                              <?php } ?>
                              <a href="#">See More</a>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                           <div class="best_img d_none">
                              
                              <figure><img src="../public/images/front.jpg"></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Best -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request a  call back</h2>
                     <p> A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <div class="contact">
                     <form>
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <div class="rable-box">
                     <figure>
                     <img src="../public/images/closeup.jpg" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!-- clients -->
      <div id="clients" class="clients ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                  <?php foreach($resultado7 as $row){ ?>
                     <h2><?php echo $row['testimony'];?></h2>
                     <?php } ?>
                     <p> A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-md-10 offset-col-md-1">
                  <div id="myCarousel" class="carousel slide clients_slider" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                       <div class="img_box">
                                          <i><img src="../public/images/icon_1.png" alt="#"/></i>
                                          <figure><img src="../public/images/clients.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                       <div class="joe">
                                          <h3>Joe elik</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                       <div class="img_box">
                                          <i><img src="../public/images/icon_1.png" alt="#"/></i>
                                          <figure><img src="../public/images/clients.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                       <div class="joe">
                                          <h3>Joe elik</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                       <div class="img_box">
                                          <i><img src="../public/images/icon_1.png" alt="#"/></i>
                                          <figure><img src="../public/images/clients.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                       <div class="joe">
                                          <h3>Joe elik</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients -->
      <!--  footer -->
      <?php
      include 'footer.php';
      ?>
      <!-- end footer -->
      <!-- Javascript files-->
      <?php
      include 'js.php';
      ?>
      
   </body>
</html>