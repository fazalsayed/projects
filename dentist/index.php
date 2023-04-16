<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number =  $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number,date) VALUES('$name','$email','$number','$date')") or die('query failed');

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
    <title>complete responsive dentist website design Tutorial</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <link href="style.css" rel="stylesheet">

</head>
<body>

<header class="header fixed-top">

<div class="container">

<div class="row align-items-center justify-content-between">

<a href="#home" class="logo">Teeth<span>care</span></a>

<nav class="nav">
    <a href="#home">home</a>
    <a href="#about">about</a>
    <a href="#services">services</a>
    <a href="#reviews">reviews</a>
    <a href="#contact">contact</a>
</nav>

<a href="#contact" class="link-btn">make appointment</a>

<div id="menu-btn" class="fas fa-bars"></div>
</div>
</div>
</header>

<section class="home" id="home">
    <div class="container">

    <div class="row min-vh-100 align-items-center">
        <div class="content text-center text-md-left">
            <h3>let us brighten your smile</h3>
            <p>Our dental clinic provides a range of services to meet your oral health needs, including regular check-ups, cleanings, fillings, extractions, and cosmetic dentistry.</p>
            <a href="#contact" class="link-btn">make appointment</a>
        </div>
    </div>
    </div>
</section>

<section class="about" id="about">

<div class="container">

<div class="row align-items-center">

<div class="col-md-6 image" >
    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
</div>

<div class="col-md-6 content">
    <span>about us</span>
    <h3>True healthcare for your family</h3>
    <p>At our clinic, we truly care about our patients and their families. We understand that oral health is an important part of overall health and wellbeing, and we strive to provide the best possible care to help our patients maintain healthy smiles.</p>
    <a href="#contact" class="link-btn">make appointment</a>
</div>


</div>
</div>
</section>

<section class="services" id="services">

<h1 class="heading">our services</h1>

<div class="box-container container">

<div class="box">
    <img src="images/icon-1.svg" alt="">
    <h3>alignment specialist</h3>
    <p>As an alignment specialist, we specialize in diagnosing and treating issues related to the alignment of teeth and jaws.</p>
</div>

<div class="box">
    <img src="images/icon-2.svg" alt="">
    <h3>Cosmetic dentistry</h3>
    <p>Our cosmetic dentistry services include teeth whitening, porcelain veneers, dental bonding, and dental implants, among others.</p>
</div>

<div class="box">
    <img src="images/icon-3.svg" alt="">
    <h3>Oral hygiene experts</h3>
    <p>As oral hygiene experts, we specialize in helping our patients maintain healthy teeth and gums through regular cleanings, check-ups, and personalized hygiene instruction.</p>
</div>
<div class="box">
    <img src="images/icon-4.svg" alt="">
    <h3>Root canal specialist</h3>
    <p>As a root canal specialist, our clinic specializes in diagnosing and treating problems related to the inner part of the tooth, also known as the pulp.</p>
</div>

<div class="box">
    <img src="images/icon-5.svg" alt="">
    <h3>Live dental advisory</h3>
    <p>Our team of dental professionals includes dentists, hygienists, and dental assistants, all of whom have extensive experience in providing high-quality dental care.</p>
</div>

<div class="box">
    <img src="images/icon-6.svg" alt="">
    <h3>Cavity inspection</h3>
    <p>Cavity inspection is an essential part of routine dental check-ups and involves a thorough examination of the teeth and gums to identify any signs of tooth decay. </p>
</div>
</div>
</section>

<section class="process">

<h1 class="heading">work process</h1>

<div class="box-container container">

<div class="box">
    <img src="images/process-1.png" alt="">
    <h3>cosmetic Dentistry</h3>
    <p>Cosmetic dentistry is a specialized area of dentistry that focuses on improving the appearance of a person's teeth, gums, and smile. </p>
</div>

<div class="box">
    <img src="images/process-2.png" alt="">
    <h3>Pediatric Dentistry</h3>
    <p>Pediatric dentistry is a specialized area of dentistry that focuses on providing dental care to children, from infancy through adolescence. </p>
</div>

<div class="box">
    <img src="images/process-3.png" alt="">
    <h3>Dental Implants</h3>
    <p>A dental implant is a small, titanium post that is surgically placed into the jawbone to serve as an artificial tooth root.</p>
</div>


</div>
</section>

<section class="reviews" id="reviews">

  <h1 class="heading">satisfied clients</h1>

   <div class="box-container container">
    <div class="box">
        <img src="images/pic-1.png" alt="">
        <p>I recently visited this dental clinic for a routine check-up, and I couldn't be more impressed with the level of care I received. From the moment I walked in the door, I was greeted with a warm and friendly welcome, and the staff made me feel completely at ease throughout my entire visit.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

        </div>
        <h3>farhan sayed</h3>
        <span>satisfied client</span>
    </div>

    <div class="box">
        <img src="images/pic-2.png" alt="">
        <p> The dentist was knowledgeable and professional, taking the time to answer all of my questions and address any concerns I had. I was impressed with the state-of-the-art technology and modern facilities, which made for a comfortable and efficient visit. </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

        </div>
        <h3>zaman sayed</h3>
        <span>satisfied client</span>
    </div>

    <div class="box">
        <img src="images/pic-3.png" alt="">
        <p>I highly recommend this dental clinic to anyone in need of high-quality dental care. Thank you for a wonderful experience!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

        </div>
        <h3>javed khan</h3>
        <span>satisfied client</span>
    </div>

</div>
</section>

<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
        }
    }
    ?>

    <span>your name :</span>
    <input type="text" name="name" placeholder="enter your name" class="box" required>

    <span>your email :</span>
    <input type="text" name="email" placeholder="enter your email" class="box" required>

    <span>your number :</span>
    <input type="text" name="number" placeholder="enter your number" class="box" required>

    <span>appointment date :</span>
    <input type="datetime-local" name="date"class="box" required>

    <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>

</section>


<section class="footer">

<div class="box-container container">

<div class="box">
    <i class="fas fa-phone"></i>
        <h3>phone number</h3>
        <p>+123-456-7890</p>
        <p>+111-222-3333</p>
    
</div>

<div class="box">
    <i class="fas fa-map-marker-alt"></i>
        <h3>our address</h3>
        <p>mumbai, india - 400104</p>
    
</div>

<div class="box">
    <i class="fas fa-clock"></i>
        <h3>opeaning hours</h3>
        <p>09:00am to 10:00pm</p>
    
</div>

<div class="box">
    <i class="fas fa-envelope"></i>
        <h3>email address</h3>
        <p>fazalsayed47@gmail.com</p>
        <p>fayum123@gmail.com</p>
    
</div>
</div>

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>fazal sayed</span> </div>

</section>






<script src="script.js"></script>
    
</body>
</html>