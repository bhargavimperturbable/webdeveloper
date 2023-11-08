<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Dynamic website</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
   <section class="main">
     <nav>
       <a href="#" class="logo">
        <img src="photo/logo1.png" alt="logo">
       </a>

       <ul class="menu">
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
       </ul>
     </nav>
     <div class="main-heading">
         <h1>Create prespectives with virtual Healityc</h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit et voluptas quis natus, aspernatur ipsam illo perferendis quos ut maxime, dolorem labore sequi fuga! Ipsam neque magni mollitia voluptate quisquam!</p>
         <a class="main-btn" href="#">Contact</a>  
      </div>
   </section>

   <section class="features">
      <div class="feature-container">

        <div class="feature-box">
           <div class="f-img">
              <img src="photo/info-icon1.png" alt="icon">
           </div>
           <div class="f-taxt">
            <h4>Web Development</h4>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="#" class="main-btn">Check</a>
           </div>
        </div>

        <div class="feature-box">
           <div class="f-img">
              <img src="photo/info-icon2.png" alt="icon">
           </div>
           <div class="f-taxt">
            <h4>Software Development</h4>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="#" class="main-btn">Check</a>
           </div>
        </div>

        <div class="feature-box">
           <div class="f-img">
              <img src="photo/info-icon3.png" alt="icon">
           </div>
           <div class="f-taxt">
            <h4>App Development</h4>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="#" class="main-btn">Check</a>
           </div>
        </div>
        
      </div>
   </section>

   <section class="about">
      <div class=" about-img">
         <img src="photo/about.png" alt="about">
      </div>
      <div class="about-taxt">
        <h2>Start Tracking Your statistics</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ex quibusdam natus cupiditate accusantium, voluptates fuga doloribus, blanditiis inventore corrupti similique
         voluptatem maiores enim quam ipsa optio dicta delectus esse!</p>
         <button class="main-btn" href="#">Read More</button>
      </div>
   </section>

   <section class="contact">
      <div class="contact-heading">
         <h1>Contact Us</h1>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
      </div>
      <form action="userinfo.php" method="post">
       <input type="text" name="user" placeholder="Your name Full Name"/>
       <input type="email" name="email" placeholder="Your name E-Mail"/>
       <textarea name="message" placeholder="Type Your Message Here........."></textarea>
       <button class="main-btn contact-btn" type="submit">Continue</button>
      </form>
   </section>
</body>
</html>


