<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Cute World!</title>
  <style>
    /* Reset default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f7f6;
      color: #333;
      line-height: 1.6;
    }

    /* Header Section */
    header {
      display: flex;
      justify-content: center; /* Center content */
      align-items: center;
      padding: 20px;
      background-color: #ffb3c1;  /* Softer pink */
      border-bottom: 4px solid #ff7f9f;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    header .logo {
      font-family: 'Pacifico', cursive;
      font-size: 32px;
      color: #ff6b81;  /* Pinkish red */
      margin-right: 50px; /* Adjust space between logo and nav */
    }
    header nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }
    header nav ul li a {
      text-decoration: none;
      color: #ff6b81;
      font-size: 18px;
      transition: color 0.3s ease;
    }
    header nav ul li a:hover {
      color: #ff4f6b;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(to right, #ffb3c1, #ffe0eb);  /* Gradient for softness */
      padding: 100px 20px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    .hero h1 {
      font-size: 65px;
      color: #ff4f6b;
      font-family: 'Pacifico', cursive;
      margin-bottom: 20px;
    }
    .hero p {
      font-size: 22px;
      color: #4e6c60;
      margin-bottom: 30px;
    }
    .cta-button {
      display: inline-block;
      background-color: #ff7f9f;
      color: white;
      padding: 18px 40px;
      border-radius: 35px;
      font-size: 22px;
      text-decoration: none;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s, transform 0.3s ease;
    }
    .cta-button:hover {
      background-color: #ff4f6b;
      transform: translateY(-5px);
    }

    /* Featured Services Section */
    .services {
      padding: 60px 20px;
      text-align: center;
      background-color: #ffffff;
    }
    .services h2 {
      font-size: 36px;
      font-family: 'Pacifico', cursive;
      color: #ff6b81;
      margin-bottom: 40px;
    }
    .service-cards {
      display: flex;
      justify-content: center;
      gap: 35px;
      flex-wrap: wrap;
    }
    .service-cards .card {
      background-color: #fff;
      border-radius: 25px;
      padding: 30px;
      width: 250px;
      text-align: center;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .service-cards .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }
    .service-cards .card img {
      width: 60px;
      height: 60px;
      margin-bottom: 20px;
    }
    .service-cards .card h3 {
      color: #ff7f9f;
      font-size: 24px;
      margin-bottom: 15px;
    }
    .service-cards .card p {
      color: #4e6c60;
    }

    /* Testimonials Section */
    .testimonials {
      background-color: #f5f7f6;
      padding: 60px 20px;
      text-align: center;
    }
    .testimonials h2 {
      font-size: 36px;
      font-family: 'Pacifico', cursive;
      color: #ff6b81;
      margin-bottom: 40px;
    }
    .testimonial-cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }
    .testimonial-cards .card {
      background-color: #ffffff;
      border-radius: 20px;
      padding: 30px;
      width: 270px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .testimonial-cards .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }
    .testimonial-cards .card p {
      color: #555;
      font-size: 18px;
      margin-bottom: 15px;
    }
    .testimonial-cards .card h4 {
      color: #ff7f9f;
      font-weight: bold;
      font-size: 20px;
    }

    /* Footer Section */
    footer {
      background-color: #ffb3c1;
      padding: 25px 20px;
      text-align: center;
      border-top: 4px solid #ff6b81;
    }
    footer .social-icons a {
      margin: 0 15px;
    }
    footer .social-icons img {
      width: 45px;
      height: 45px;
      transition: transform 0.3s ease;
    }
    footer .social-icons img:hover {
      transform: scale(1.1);
    }
    footer p {
      font-size: 14px;
      color: #4e6c60;
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">Cute World</div>
    <nav>
      <ul>
        <li><a href="d">Demo</a></li>
        <li><a href="a">About</a></li>
        <li><a href="s">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to Cute World!</h1>
    <p>Where joy and creativity come together in a fun and colorful space.</p>
    <a href="#explore" class="cta-button">Explore More</a>
  </section>

  <!-- Featured Services Section -->
  <section class="services">
    <h2>What We Offer</h2>
    <div class="service-cards">
      <div class="card">
        <img src="https://img.icons8.com/ios/50/000000/cake.png" alt="Cupcake">
        <h3>Delicious Treats</h3>
        <p>Handmade with love, perfect for your sweet tooth!</p>
      </div>
      <div class="card">
        <img src="https://img.icons8.com/ios/50/000000/paint-brush.png" alt="Art">
        <h3>Creative Art</h3>
        <p>Transforming your ideas into vibrant art!</p>
      </div>
      <div class="card">
        <img src="https://img.icons8.com/ios/50/000000/party.png" alt="Party">
        <h3>Fun Parties</h3>
        <p>Celebrating life's moments with a blast!</p>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>What Our Happy Customers Say</h2>
    <div class="testimonial-cards">
      <div class="card">
        <p>"Absolutely adorable! Love visiting this site!"</p>
        <h4>– Emily</h4>
      </div>
      <div class="card">
        <p>"The creativity here is amazing! Highly recommend!"</p>
        <h4>– Sophie</h4>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class="social-icons">
      <a href="#"><img src="https://img.icons8.com/ios/50/000000/facebook.png" alt="Facebook"></a>
      <a href="#"><img src="https://img.icons8.com/ios/50/000000/instagram-new.png" alt="Instagram"></a>
    </div>
    <p>&copy; 2025 Cute World. All rights reserved.</p>
  </footer>

</body>
</html>
