<?php
include('connection.php');
session_start(); // session start

if(isset($_POST['form']))
{
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     $query = "INSERT INTO `students`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
     $run = mysqli_query($conn, $query);

     if($run) {
          $_SESSION['msg'] = [
              "type" => "success",
              "text" => "✅ Message sent successfully!"
          ];
     } else {
          $_SESSION['msg'] = [
              "type" => "error",
              "text" => "❌ Error: " . mysqli_error($conn)
          ];
     }

     header("Location: ".$_SERVER['PHP_SELF']."#contact");
     exit;
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Website</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" href="pic/icon.ico" type="image/x-icon">
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>
<style>

  
#popup-message {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px 40px;
  border-radius: 12px;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  z-index: 9999;
  box-shadow: 0 4px 20px rgba(0,0,0,0.3);
  animation: fadeIn 0.5s ease-in-out;
}

#popup-message.success {
  background: #28a745; /* Green */
  color: white;
}

#popup-message.error {
  background: #dc3545; /* Red */
  color: white;
}

@keyframes fadeIn {
  from {opacity: 0; transform: translate(-50%, -60%);}
  to {opacity: 1; transform: translate(-50%, -50%);}
}

</style>
<body>
  <header class="header">
    <a href="#" class="logo">Code Crafting Solution</a>
    <nav class="navbar">
      <a href="#home" style="--i:1" class="active">Home</a>
      <a href="#about" style="--i:2">About</a>
      <a href="#services" style="--i:3">Services</a>
      <a href="#contact" style="--i:4">Contact</a>
    </nav>
<div class="menu-icon">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>

  </header>

  <!-- Home Section -->
  <section class="home" id="home">
    <div class="home-content">
      <h3>Hello, It's Me</h3>
      <h1>Muhammad Alyan</h1>
      <h3>And I'm a <span class="text"></span></h3>
      <p>Web Development is the process of designing, building, and <br>maintaining websites or web applications using technologies like HTML, CSS, JavaScript</p>

      <div class="home-sci">
        <a href="https://www.facebook.com/profile.php?id=61570471395026&mibextid=ZbWKwL" target="_blank">
          <i class='bx bxl-facebook'></i>
        </a>
        <a href="https://www.instagram.com/informationbyalyan?igsh=MW4weTVrOXM5czVrZQ==" target="_blank">
          <i class='bx bxl-instagram'></i>
        </a>
        <a href="https://www.tiktok.com/@informationbyalyan?_t=ZS-8tMQYQLLxg8&_r=1" target="_blank">
          <i class='bx bxl-tiktok'></i>
        </a>
        <a href="https://www.youtube.com/@informationbyalyan" target="_blank">
          <i class='bx bxl-youtube'></i>
        </a>
      </div>

    </section>

  <!-- About Section -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="images/pic.png" alt="Image" />
    </div>
    <div class="about-text">
      <h2>About <span>Me</span></h2>
      <h4>Full Stack Developer!</h4>
      <p>A Full Stack Developer is skilled in both frontend and backend development...</p>
      <a href="#" class="btn-box">More About Me</a>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services" id="services">
    <div class="container">
      <h1 class="sub-title">My <span>Services</span></h1>
      <div class="services-list">
        <div>
          <i class='bx bxs-star' style='color:#0cf5e4'></i>
          <h2>Static Websites</h2>
          <p>Static websites are simple, fast, and ideal for showcasing fixed content...</p>
          <a href="#" class="read">Learn more</a>
        </div>
        <div>
          <i class='bx bxs-star' style='color:#0cf5e4'></i>
          <h2>Dynamic Websites</h2>
          <p>Dynamic websites provide interactive and personalized content...</p>
          <a href="#" class="read">Learn more</a>
        </div>
        <div>
          <i class='bx bxs-star' style='color:#0cf5e4'></i>
          <h2>Graphic Designing</h2>
          <p>Graphic design services for social media posts, brochures, flyers, etc...</p>
          <a href="#" class="read">Learn more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- contact -->
    <section class="contact" id="contact">
      <div class="contact-text">
        <h2>Contact <span>Me</span></h2>
        <h4>Reach out to me for any inquiries or collaboration!</h4>
        <p>"Contact Me" means inviting someone to reach out for communication, collaboration.</p>
<br>
        <div class="contact-list">
          <li><i class='bx bx-send' style='color:#13cce4'></i> Muhammadalyan12690@gmail.com</li>
          <li><i class='bx bx-phone' style='color:#13cce4'></i> 03273712641</li>
        </div>
      </div>

    <div class="home-sci">
      <a href="https://www.facebook.com/profile.php?id=61570471395026&mibextid=ZbWKwL" target="_blank">
        <i class='bx bxl-facebook'></i>
      </a>
      <a href="https://www.instagram.com/informationbyalyan?igsh=MW4weTVrOXM5czVrZQ==" target="_blank">
        <i class='bx bxl-instagram'></i>
      </a>
      <a href="https://www.tiktok.com/@informationbyalyan?_t=ZS-8tMQYQLLxg8&_r=1" target="_blank">
        <i class='bx bxl-tiktok'></i>
      </a>
      <a href="https://www.youtube.com/@informationbyalyan" target="_blank">
        <i class='bx bxl-youtube'></i>
      </a>
    </div>

    <div class="contact-form">
  <h3>Send Me A Message</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="POST">
    <input type="text" placeholder="Your Name" name="name" required>
    <input type="email" placeholder="Your Email" name="email" required>
    <textarea placeholder="Your Message" name="message" required></textarea>
    <button type="submit" class="send" name="form">Send Message</button>
  </form>

 <?php if(isset($_SESSION['msg'])) { ?>
  <div id="popup-message" class="<?= $_SESSION['msg']['type'] ?>">
    <p><?= $_SESSION['msg']['text'] ?></p>
  </div>

  <script>
    setTimeout(function(){
      let popup = document.getElementById("popup-message");
      if(popup) popup.style.display = "none";
    }, 3000);
  </script>

  <?php unset($_SESSION['msg']); } ?>



 <script src="index.js"></script> 
</body>

</html>

