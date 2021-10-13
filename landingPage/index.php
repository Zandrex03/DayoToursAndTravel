<?php
    include('../Config/config.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png/jpg" href="assets/logoDayo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>Dayo</title>
</head>
<body class="body-container">
    <div class="main-container">
        <div class="overlay-sidebar">
            <i class="far fa-times-circle"></i>
            <div class="overlay-sidebar-content">
               <div class="navigations-ovelay">
                    <div class="ul-overlay">
                        <li><a href="../landingPage/index.php">Home</a></li>         
                        <li><a href="../Blog/blog.php">Blogs</a></li>         
                        <li><a href="../SidePagesInFooter/about.php">About</a></li>          
                        <li><a href="../Virtual-tour/virtualtour.php">Virtual Tour</a></li>         
                    </div>
               </div>
                <div class="call-to-action-overlay">
                    <div class="overlay-btn-wrapper">
                        <button class="book-btn-overlay"><a href="../book/book.php">Book a Travel</a></button>
                    </div>
                    <i class="fas fa-user-circle user"></i>
                </div> 
            </div>
        </div>
        <div class="nav-container">
            <div class="navbar">
                <div class="nav">
                    <div class="logo-wrapper">
                       <img src="assets/logoDayo3.jpg" alt="Dayo Tours">
                    </div>
                    <div class="navigations">
                        <div class="ul">
                            <li><a href="../landingPage/index.php">Home</a></li>    
                            <li><a href="../Blog/blog.php">Blogs</a></li>         
                            <li><a href="../SidePagesInFooter/about.php">About</a></li>         
                            <li><a href="../Virtual-tour/virtualtour.php">Virtual Tour</a></li>         
                        </div>
                    </div>
                    <div class="call-to-action">
                        <a class="book-btn" href='../book/book.php'>Book a Travel</a>
                        <i class="fas fa-user-circle"></i>
                    </div> 
                    <i id="menu" class="fas fa-align-right"></i>
                </div>
             </div>
        </div>
        
        <div class="hero-section">
            <div class="hero-content">
               <div class="hero-left">
                   <div class="hero-left-content">
                        <p>San Jose del Monte's Tourist Spots!</p>
                        <h1>Experience new Travel Memories with us.</h1>
                        <div class="hero-btn-wrapper">
                            <button class="get-started-btn" onclick="window.location.href='../book/book.php'">Get Started</button>
                        </div>  
                   </div>
               </div>
               <div class="hero-right">
                   <div class="hero-right-content">
                       <span class="spacer"></span>
                       <img src="assets/tour.svg" alt=""> 
                   </div>
               </div>
            </div>
        </div>

        <div class="about-section">
            <div class="about-content">
                <div class="about-left">
                    <div class="about-left-content">
                        <h1>EXPLORE A DIFFERENT</h1>
                        <h1>WAY TO TRAVEL.</h1> 
                        <p class="first " style='text-align:justify'>Discover new cultures and have a wonderful rest with Backpack Story! Select the place you’d like to visit and provide our agents with estimated time – they’ll find and offer the most suitable tours and hotels. Our agents with estimated time – they’ll find and offer the most suitable tours and hotels. </p>
                        <p style='text-align:justify'>Plan your trip to the natures of San Jose del Monte City, Philippines with this complete travel guide. Learn about the best time to go, how to get there, best resorts, top tours, and best places.</p>
                    </div> 
                </div>
                <div class="about-right">
                    <div class="about-right-content">
                         <img src="assets/AboutPhotos.jpg" alt="three photos">
                    </div>
                </div>
            </div>
        </div>

        <div class="tours-section">
           <h3 class="tour-title">Most Popular</h3>
           <div class="tour-container">
               <div class="tour-content">
                   <div class="tour-wrapper">
                     <div class="tour-content-wrapper">
                        <img class="img" src="assets/mtBalagbag2.jpg" alt="Mt. Balagbag">
                        <div class="tour-details-wrapper" onclick="window.location.href='http:/DayoToursTravelWebsite2.1/Outdoor-adventure/book-outdoor-2.php?sel=Mount+Balagbag'">
                            <div class="details-wrapper">
                                <h5>Mt Balagbag</h5>
                                <div class="review-rating">
                                    <div class="stars-wrapper">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star star-5"></i>
                                        4.5
                                    </div>
                                    <span>Review: 3 review/s</span>
                                </div>
                                <div class="arrow">
                                   <i class="fas fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                   <div class="tour-wrapper">
                     <div class="tour-content-wrapper">
                        <img class="img" src="assets/grotto.jpg" alt="Our lady of Lourdes Grotto">
                        <div class="tour-details-wrapper">
                            <div class="details-wrapper">
                                <h5>Our lady of Lourdes Grotto</h5>
                                <div class="review-rating">
                                    <div class="stars-wrapper">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star star-5"></i>
                                        4.5
                                    </div>
                                    <span>Review: 3 review/s</span>
                                </div>
                                <div class="arrow">
                                   <i class="fas fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                   <div class="tour-wrapper">
                     <div class="tour-content-wrapper">
                            <img class="img" src="assets/pacific.jpg" alt="Pacific Wave Resort">
                        <div class="tour-details-wrapper">
                            <div class="details-wrapper">
                                <h5>Pacific Wave Resort</h5>
                                <div class="review-rating">
                                    <div class="stars-wrapper">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star star-5"></i>
                                        4.5
                                    </div>
                                    <span>Review: 3 review/s</span>
                                </div>
                                <div class="arrow">
                                   <i class="fas fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
           </div>
        </div>

       <div class="staycation-section">
           <div class="title-wrapper">
                <h3 class="staycation-title">Staycation Places</h3>
           </div>
            <div class="staycation-content">
                <div class="staycation-border">
                     <h1>SJDM Best Hotel and Resort</h1>
                     <p>We offer the best accomodating hotel and </p>
                     <p>resort in Sanjose  Del Monte Bulacan</p>  
                     <button class="see-more-btn" onclick="window.location.href='../Staycation/staycation.php'">See More</button>
                </div>
            </div>
            <div class="staycation-img-wrapper">
                <div class="img-wrapper">
                    <img src="assets/TRFhotel.jpg" alt="Trf Hotel">
                    <p>TRF Hotel</p>
                </div>
                <div class="img-wrapper">
                    <img src="assets/VillaAntonio.jpg" alt="Villa Antonio">
                    <p>Villa Antonio</p>
                </div>
                <div class="img-wrapper">
                    <img src="assets/grottoVistaHotel.jpg" alt="Grotto Vista Hotel">
                    <p>Grotto Vista Hotel and Resort</p>
                </div>
            </div>
       </div>

       <div class="event-experience-section">
           <div class="event-content">
             <div class="event-description">
                 <h1>Virtual Tour</h1>
                 <p class="first">We offer Real-life simulations of the itineraries</p>
                 <p><i>“A traveler without observation is a bird without wings.”</i></p>
                 <p>——Moslih Eddin Saadi</p>
                 <button class="see-more-btn2" onclick="window.location.href='../Virtual-tour/virtualtour.php'">See More</button>
             </div>
             <div class="event-details-wrapper">
                <video muted autoplay="true" loop="true" class="virtual-video">
                    <source src="assets/virtualVideo.mp4" type="video/mp4">
                </video>
             </div>
           </div>
       </div>

       <div class="discover-experience-section container">
           <h3 class="discover-title">Discover Experience</h3>
           <div class="discover-experience-content">
              <h2>Travel Blog</h2>
              <p class="discover-paragraph">Get updated with latest news about facts, travel conditions and destinations</p>
              <div class="blog-card-wrapper">
                   <div class="blog-card">
                       <img src="assets/VSOrchidariumFarm.jpg" alt="VS Orchidarium Farm">
                       <div class="blog-card-details">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae</p>
                       </div>
                   </div>
                   <div class="blog-card">
                       <img src="assets/PineappleFarm.jpg" alt="Pineapple Farm">
                       <div class="blog-card-details">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae</p>
                       </div>
                   </div>
                   <div class="blog-card">
                       <img src="assets/tungkofood.jpg" alt="Suman in tungko">
                       <div class="blog-card-details">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae</p>
                       </div>
                   </div>
              </div>
           </div>
           <div class="button-wrapper">
               <button>See More Blogs</button>
           </div>
       </div>

        <div class="container testimonial-section">
            <div class="row">
                <div class="col-md-8 col-center m-auto">
                                  <h2 class="testimonial-title">Testimonials</h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <?php
                        $res = mysqli_query($connection, "SELECT * from testimonials");
                        $foo = 1;
                    ?>
                        <div class='carousel-inner'>
                        
                    <?php        
                        while($rowX = mysqli_fetch_array($res)){
                            if($foo==1){
                            echo "<div class='item carousel-item active'>";
                            echo "<div class='img-box'><img src='assets/testimonials/".$rowX['testimonials_number'].".jpg' alt=''></div>";
                            echo "<p class='testimonial'>".$rowX['testimonials_message']."</p>";
                            echo "<p class='overview'><b>".$rowX['testimonials_name']."</b>, ".$rowX['testimonials_pos']."</p>";
                            echo "</div>";
                            $foo++;
                            }
                            else{
                            echo "<div class='item carousel-item '>";
                            
                            echo "<div class='img-box'><img src='assets/testimonials/".$rowX['testimonials_number'].".jpg' alt=''></div>";
                            echo "<p class='testimonial'>".$rowX['testimonials_message']."</p>";
                            echo "<p class='overview'><b>".$rowX['testimonials_name']."</b>, ".$rowX['testimonials_pos']."</p>";
                            echo "</div>";
                           }
                        }
                    
                    ?>
                        
                    </div>
                        </div>
                    
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="filter-list-section">
            <h4>Inspiration for your future getaway in San Jose del Monte</h4>
            <div class="filter-buttons-wrapper">
                <button class="outdoor-btn">Outdoor Adventure</button>
                <button class="hr-btn">Hotels And Resort</button>
                <button class="church-btn active">Churches</button>
                <button class="visited-btn">Most Visited</button>
            </div>
            <div id="church">
                <div class="filter-img-wrapper">
                    <div class="filter-img">
                        <img src="assets/churches/SanLorenzoRuiz.jpg" alt="San Lorenzo Ruiz" class="image">
                        <div class="image-overlay">
                            <h5>San Lorenzo Ruiz Church</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                    <div class="filter-img">
                        <img src="assets/churches/grotto.jpg" alt="Our Lady of Lourdes Grotto Shrine" class="image">
                        <div class="image-overlay">
                            <h5>Our Lady of Lourdes Grotto Shrine</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                    <div class="filter-img">
                        <img src="assets/churches/SacredHeartofJesusParishChurch.jpg" alt="Sacred Heart of Jesus Parish Church" class="image">
                        <div class="image-overlay">
                            <h5>Sacred Heart of Jesus Parish Church</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                    <div class="filter-img">
                        <img src="assets/churches/apostleChurch.jpg" alt="Parokya ni San Pedro Apostol Church" class="image">
                        <div class="image-overlay">
                            <h5>Parokya ni San Pedro Apostol Church</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                    <div class="filter-img">
                        <img src="assets/churches/SagradaFamiliaParishChurch.jpg" alt="Sagrada Familia Parish Church" class="image">
                        <div class="image-overlay">
                            <h5>Sagrada Familia Parish Church</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                    <div class="filter-img">
                         <img src="assets/churches/SanIsidroLabradorParishChurch.jpg" alt="San Isidro Labrador Parish Church" class="image">
                        <div class="image-overlay">
                            <h5>San Isidro Labrador Parish Church</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="outdoor-adventure">
                <div class="filter-img-wrapper">
                     <div class="filter-img">
                         <img src="assets/outdoor-adventure/kaytitingaFalls3.jpg" alt="Kaytitinga Falls" class="image">
                            <div class="image-overlay">
                                <h5>Kaytitinga Falls</h5>
                                <button class="view-btn2">View</button>
                            </div>
                     </div>
                     <div class="filter-img">
                         <img src="assets/outdoor-adventure/MtBalagbag18.jpg" alt="Mt Balagbag" class="image">
                            <div class="image-overlay">
                                <h5>Mt Balagbag</h5>
                                <button class="view-btn2" onclick="window.location.href='http:/DayoToursTravelWebsite2/Outdoor-adventure/book-outdoor-2.2.php?sel=Mount+Balagbag';">View</button>
                            </div>
                     </div>
                     <div class="filter-img">
                           <img src="assets/outdoor-adventure/cattle-creek-1.jpg" alt="Cattle Creek Golf Course" class="image">
                            <div class="image-overlay">
                                <h5>Cattle Creek Golf Course</h5>
                                <button class="view-btn2">View</button>
                            </div>
                     </div>
                     <div class="filter-img">
                            <img src="assets/outdoor-adventure/paradise3.png" alt="Paradise Adventure Camp" class="image">
                            <div class="image-overlay">
                                <h5>Paradise Adventure Camp</h5>
                                <button class="view-btn2">View</button>
                            </div>
                     </div>                   
                 </div>
            </div>
            <div id="most-visited">
                <div class="filter-img-wrapper">
                    <div class="filter-img">
                         <img src="assets/most-popular/grottovista2.jpg" alt="Grotto Vista Hotel and Resort" class="image">
                        <div class="image-overlay">
                            <h5>Grotto Vista Hotel and Resort</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                    <div class="filter-img">
                         <img src="assets/most-popular/MtBalagbag12.jpg" alt="Mt Balagbag" class="image">
                        <div class="image-overlay">
                            <h5>Mt Balagbag</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>
                    <div class="filter-img">
                         <img src="assets/most-popular/grotto.jpg" alt="Our Lady of Lourdes Grotto Shrine" class="image">
                        <div class="image-overlay">
                            <h5>Our Lady of Lourdes Grotto Shrine</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>  
                </div>
            </div>
            <div id="hotel-resort">
                <div class="filter-img-wrapper">
                    <div class="filter-img">
                         <img src="assets/hotel-and-resort/adventureResort2.jpg" alt="Adventure Resort" class="image">
                        <div class="image-overlay">
                            <h5>Adventure Resort</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>  
                    <div class="filter-img">
                         <img src="assets/hotel-and-resort/grottovista.jpg" alt="Grotto Vista Hotel and Resort" class="image">
                        <div class="image-overlay">
                            <h5>Grotto Vista Hotel and Resort</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>  
                    <div class="filter-img">
                         <img src="assets/hotel-and-resort/losarcos.jpg" alt="Los Arcos Hermano Resort" class="image">
                        <div class="image-overlay">
                            <h5>Los Arcos Hermano Resort</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>  
                    <div class="filter-img">
                         <img src="assets/hotel-and-resort/tierraFontanaResort2.jpg" alt="Tierra Fontana 12 waves Resort" class="image">
                        <div class="image-overlay">
                            <h5>Tierra Fontana 12 waves Resort</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>  
                    <div class="filter-img">
                         <img src="assets/hotel-and-resort/villaAntonioDeDave.png" alt="Villa Antonio De Dave leisure farm and resort" class="image">
                        <div class="image-overlay">
                            <h5>Villa Antonio De Dave leisure farm and resort</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>  
                    <div class="filter-img">
                         <img src="assets/hotel-and-resort/trf.jpg" alt="Trf Hotel" class="image">
                        <div class="image-overlay">
                            <h5>Trf Hotel</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>                      
                    <div class="filter-img">
                         <img src="assets/hotel-and-resort/pacific-waves-resort.jpg" alt="Pacific Waves Resort" class="image">
                        <div class="image-overlay">
                            <h5>Pacific Waves Resort</h5>
                            <button class="view-btn2">View</button>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>

        <div class="newsletter-section">
            <div class="newsletter-content">
                <h3 class="subscribe-title">Subscribe to our Newsletter to be Updated</h3>
                <div class="input-wrapper">
                    <input type="text" placeholder="Enter Full Name ">
                    <input type="text" placeholder="✉ Enter Email Address">
                </div>
                <div class="newsletter-btn-wrapper">
                    <button>Subscribe</button>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-content">
               <div class="footer-wrapper">
                    <div class="about-wrapper">
                        <h6>About</h6>
                            <li>How Dayo Works</li>
                            <li>What is San Jose Del Monte</li>
                            <li>Virtual Tour</li>
                            <li>Testimonials</li>
                            <li>Founder Message</li>
                    </div>
                    <div class="community-wrapper">
                        <h6>Community</h6>
                            <li>I want to know the process</li>
                            <li>Dayo Blogs</li>
                            <li>Avail Gift cards and Vouchers</li>
                            <li>Social Media groups and clubs</li>
                    </div>
                    <div class="developers-wrapper">
                        <h6>Developers</h6>
                            <li>The Team Behind</li>
                            <li>Projects</li>
                            <li>Get in Touch</li>
                    </div>
                    <div class="logIn-wrapper">
                        <h6>LogIn</h6>
                            <li>Tour Guide</li>
                            <li>Administrator</li>
                            <li>Tour Agent</li>
                    </div>
                    <div class="contact-wrapper">
                        <h6>Contact Us</h6>
                            <li>Support Us</li>
                            <li>Cancellation Policy</li>
                            <li>Get Your Direction to Our Office</li>
                            <li>Help Center</li>
                        
                    </div>
               </div>
               <div class="line"></div>
               <div class="copyright-wrapper">
                   <div class="copyright">
                       <b>Copyright © <?php echo date("Y"); ?> DAYO Travel and Tours PH. All Rights Reserved.</b>
                        <i> | Privacy • Terms • Site Map</i>
                       
                   </div>
                   <div class="social-media-icons">
                       <i class="fab fa-facebook-square" onclick="window.location.href='https://www.facebook.com/DayoTravelandTour/'"></i>
                       <i class="fab fa-twitter-square" onclick="window.location.href='https://twitter.com/Dayo_721?t=IEvK2CUSqBqWvrPjZ1sebg&s=09'"></i>
                       <i class="fab fa-instagram-square" onclick="window.location.href='https://www.instagram.com/dayotravelandtours/'"></i>
                       <i class="fab fa-pinterest-square" onclick="window.location.href='https://www.instagram.com/dayotravelandtours/'"></i>
                       <i class="fab fa-youtube-square" onclick="window.location.href='https://www.instagram.com/dayotravelandtours/'"></i>
                    </div>
                   <div class="dayo-email">
                       <b>contact@dayotours.com</b>
                   </div>
               </div>
            </div>
        </footer>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script src="app.js"></script>
</body>
</html>