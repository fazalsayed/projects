<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name` AND email = '$email' AND number = '$number' AND message = '$msg'") or die ('query falied');

    if(mysqli_num_rows($select_message)>0){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact-form`(name, email, number, message) VALUES('$name','$email', '$number' , '$msg')") or die ('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive portfolio</title>
</head>

   
   <link rel="stylesheet" href="style.css">
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message" data-aos="zoom-out">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}

?>

<header class="header">
<div id="menu-btn" class="fas fa-bars"></div>

<a href="#home" class="logo">Portfolio</a>

<nav class="navbar">
    <a href="#home" class="active">home</a>
    <a href="#about">about</a>
    <a href="#contact">contact</a>
</nav>

<div class="follow">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkdein"></a>
    <a href="#" class="fab fa-github"></a>
</div>

</header>

<section class="home" id="home">

<div class="image" data-aos="fade-right">
    <img src="images/image1.jpg" alt="">
</div>

<div class="content">
    <h3 data-aos="fade-up">hi, i am fazal sayed</h3>
    <span data-aos="fade-up">Web designer & developer</span>
    <p data-aos="fade-up">Hard-working individual as well as strong ability to communicate and work in a team effectively seeks an entry-level position for Front-end Developer or any IT sector job in a highly professional environment to get on the job training and gain more and more knowledge.</p>
    <a data-aos="fade-up" href="#about" class="btn">about me</a>

</div>
</section>

<section class="about" id="about">

<h1 class="heading" data-aos="fade-up"> <span>biography</span></h1>

<div class="biography">

<p data-aos="fade-up">i am fazal sayed.i am from Navelim,colmorod, Goa.i did my schooling from Damodar English high school and graduation (BCA) from Rosary college of Commerce and Arts.i am good in web designing, logo designing, video editing, 3D modeling , Testing. my main goal is to work in a good company where i can get a great apportunity to work with experinced people, learn new things and increase my knowledge.i like to play all outdoor games, swimming, spending time with friends, doing Adventureous things and drawing .</p>

<div class="bio">
    <h3 data-aos="zoom-in"> <span>name : </span> fazal sayed </h3>
    <h3 data-aos="zoom-in"> <span>email : </span> fazalsayed956@gmail.com </h3>
    <h3 data-aos="zoom-in"> <span>address : </span> navelim, colmorod akash residential,goa </h3>
    <h3 data-aos="zoom-in"> <span>phone : </span> 7770076715</h3>
    <h3 data-aos="zoom-in"> <span>age : </span> 20 years</h3>
    <h3 data-aos="zoom-in"> <span>experience : </span> fresher </h3>
</div>

<a href="#" class="btn" data-aos="fade-up">download CV</a>
</div>

<div class="skills" data-aos="fade-up">

<h1 class="heading"> <span>skills</span></h1>

<div class="progress">
    <div class="bar" data-aos="fade-left"><h3><span>HTML</span> 95%</h3></div>
    <div class="bar" data-aos="fade-left"><h3><span>css</span> 80%</h3></div>
    <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span> 70%</h3></div>
    <div class="bar" data-aos="fade-left"><h3><span>bootstrap</span> 80%</h3></div>
    <div class="bar" data-aos="fade-left"><h3><span>github</span> 80%</h3></div>
    <div class="bar" data-aos="fade-left"><h3><span>php</span> 70%</h3></div>
    <div class="bar" data-aos="fade-left"><h3><span>react</span> 70%</h3></div>

</div>
</div>

<div class="edu-exp">
    <h1 class="heading" data_aos="fade-up"><span>education</span></h1>

    <dic class="row">

    <div class="box-container">

    <h3 class="title" data_aos="fade-right"> education </h3>

    <div class="box" data-aos="fade-right">
        <span>(2017-2018)</span>
        <h3>10th</h3>
        <p>I did my schooling and completed my 10th from Damodar English High School</p>
    </div>

    <div class="box" data-aos="fade-right">
        <span>(2018-2020)</span>
        <h3>Higher secondary</h3>
        <p>I did my 11th and 12th from Damodar  Higher Secondary school</p>
    </div>

    <div class="box" data-aos="fade-right">
        <span>(2020-2023)</span>
        <h3>Graduation</h3>
        <p>I completed my Graduation(BCA) from Rosary College Of Arts And Commerce</p>
    </div>

    </div>
</div>
</section>

<section class="contact" id="contact">

<h1 class="heading" dataos="fade_up"><span>contact me</span></h1>

<form action="" method="post">
    <div class="flex">
        <input data_os="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
        <input data_os="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
    </div>
    <input data_os="fade-right" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
    <textarea data_os="fade-up" name="message" placeholder="enter your message" class="box" required cols="30" rows="10"></textarea>
    <input data_os="zoom-in" type="submit" name="send" value="send message" class="btn">
    
</form>

<div class="box-container">
    <div class="box" data_aos="zoom-in">
        <i class="fas fa-phone"></i>
        <h3>phone</h3>
        <p>7770076715</p>
    </div>

    <div class="box" data_aos="zoom-in">
        <i class="fas fa-envelope"></i>
        <h3>email</h3>
        <p>fazalsayed956@gmail.com</p>
    </div>

    <div class="box" data_aos="zoom-in">
        <i class="fas fa-map-marker_alt"></i>
        <h3>address</h3>
        <p>navelim,Goa</p>
    </div>
</div>
</section>

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Fazal sayed</span> </div>

<script src="script.js"></script>


<script>

    AOS.init({
        duration:800,
        delay:300
    });
</script>
   
</body>
</html>