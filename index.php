<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor_name']);

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date,doctor_name) VALUES('$name','$email','$number','$date','$doctor_name')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style_lp.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>WC</strong>medical </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images\home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="login.php" class="btn"> appoint us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied clients</p>
    </div>

    <div class="icons">
    <i class="fa-solid fa-database" style="color: #16a085;"></i>
        <h3>490+</h3>
        <p>Databases</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>Hospital Tie-Ups</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images\about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Welcome to our Hospital Management System (HMS) page, where efficiency meets precision in healthcare administration. Our HMS is a robust software solution designed to streamline operations, enhance patient care, and optimize resource management. From seamless patient registration and appointment scheduling to integrated billing and comprehensive medical record management, our system ensures smooth workflows and improved efficiency for healthcare professionals. With advanced analytics and reporting capabilities, we empower informed decision-making and regulatory compliance, ensuring that every aspect of hospital management is optimized for exceptional patient outcomes. Join us in transforming healthcare delivery with our innovative HMS – because your hospital deserves the best.</p>
        </div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
        <i class="fa-solid fa-file-shield" style="color: #16a085;"></i>
            <h3>Data security</h3>
            <p>We keep your data safe with no risk of getting corrupted</p>
            <br>
        </div>

        <div class="box">
        <i class="fa-solid fa-phone" style="color: #16a085;"></i>
            <h3>24/7 services</h3>
            <p>We provide 24 hour services to our clients in case of any emergency</p>
            <br>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>The best doctors are available here to provide you guidance</p>
            <br>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>The correct medicine for your illness with the best discounts</p>
            <br>
        </div>

        <div class="box">
        <i class="fa-solid fa-database" style="color: #16a085;"></i>
            <h3>Data backup</h3>
            <p>We keep a backup of your data in a safe location in case of any destruction of data</p>
            <br>
        </div>

        <div class="box">
        <i class="fa-solid fa-user-lock" style="color: #16a085;"></i>
            <h3>Privacy</h3>
            <p>All the data provided by the client is kept private to prevent any invasion of privacy</p>
            <br>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images\doc-1.jpg" alt="">
            <h3>Anna Joseph</h3>
            <span>Dermatologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="images/doc-2.jpg" alt="">
            <h3>Benson Wainaina</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/doc-3.jpg" alt="">
            <h3>Erna Gill</h3>
            <span>Gynecologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/doc-4.jpg" alt="">
            <h3>Katherine Walker</h3>
            <span>Family Physician</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/doc-5.jpg" alt="">
            <h3>Totona Joyce</h3>
            <span>Surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/doc-6.jpg" alt="">
            <h3>Kevin Owens</h3>
            <span>Neurologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        
    </div>

</section>


<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
        <br>
            <br>
            <h3>Kkrishna Bhanushali</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <br>
            <br>
            <br>
            <br>
            <p class="text">I was thoroughly impressed with the care I received at this hospital! The doctors and nurses were attentive, kind, and knowledgeable. The facilities were clean and modern, and I felt comfortable throughout my stay. The food could be improved, but overall I'm grateful for the excellent treatment I received. I would definitely recommend this hospital to anyone in need of medical care!</p>
        </div>

        <div class="box">
        <br>
            <br>
            <h3>Saish Gurav</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <br>
            <br>
            <br>
            <br>
            <p class="text">The emergency room staff at this hospital were absolute lifesavers! They quickly diagnosed and treated my condition with professionalism and compassion. The hospital's state-of-the-art equipment and technology gave me peace of mind during a stressful time. The only downside was the long wait time, but it was worth it for the quality of care I received. I'm so grateful to have this hospital in my community!</p>
        </div>

        <div class="box">
            <br>
            <br>
            <h3>Soham Ghadge</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <br>
            <br>
            <br>
            <br>
            <p class="text">I was hesitant to undergo surgery, but the team at this hospital put me at ease from start to finish. My surgeon was exceptional, explaining everything in detail and answering all my questions. The hospital's private rooms were comfortable and quiet, and the food was surprisingly good! The physical therapy department was also top-notch, helping me recover quickly and easily. I feel lucky to have chosen this hospital for my care!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                </div>
                <h3>Best Hospital Manager</h3>
                <p>Hospital management services optimize administrative tasks to enhance operational efficiency and improve patient care outcomes.</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 3 March, 2023 </a>
                </div>
                <h3>Manager of all times(MOAT)</h3>
                <p>Integration of technology and strategic planning to streamline operations, optimize resource allocation and enhance patient care delivery with efficiency and precision.</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 17 October, 2023 </a>
                </div>
                <h3>Very good services</h3>
                <p>It involves overseeing the efficient operation and administration of healthcare facilities to ensure optimal patient care and organizational effectiveness.</p>
            </div>
        </div>
    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +919653263098 </a>
            <a href="#"> <i class="fas fa-phone"></i> +918169079270 </a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"> <i class="fas fa-envelope"></i> kkrishnab@gmail.com </a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"> <i class="fas fa-envelope"></i> saishg@vgmailcom </a>
            <a href="https://www.google.com/maps/place/Sanpada+Railway+Station,+Navi+Mumbai,+Maharashtra+400705/@19.0659843,73.0082199,18z/data=!3m1!4b1!4m6!3m5!1s0x3be7c144f553841f:0x8f2bc7ddf56a0424!8m2!3d19.0657562!4d73.0093491!16s%2Fg%2F11lsngm152?entry=ttu"> <i class="fas fa-map-marker-alt"></i> Mumbai, India </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Group(vesp)</span></div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="script_lp.js"></script>

</body>
<script src="https://kit.fontawesome.com/9839e72615.js" crossorigin="anonymous"></script>
</html>

