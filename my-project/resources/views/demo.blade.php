<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cute Homepage</title>
  <style>
    /* General Styling */
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
      color: #333;
    }

    h1, h2, h3 {
      margin: 0;
    }

    /* Header */
    header {
      background-color: #ffdfdf;  /* Soft pastel pink */
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    header .logo img {
      width: 50px;
    }
    header nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
    }
    header nav ul li a {
      text-decoration: none;
      font-size: 18px;
      color: #2e4f4f;  /* Dark teal */
      font-weight: bold;
      transition: color 0.3s ease;
    }
    header nav ul li a:hover {
      color: #ff6b6b;  /* Soft red hover */
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #ffdfdf, #f9e5e5);  /* Soft gradient */
      text-align: center;
      padding: 100px 20px;
    }
    .hero h1 {
      font-family: 'Pacifico', cursive;
      font-size: 60px;
      color: #ff6b6b;
      letter-spacing: 3px;
      margin-bottom: 15px;
    }
    .hero p {
      font-size: 22px;
      color: #4b7f52;  /* Soft green */
      margin-bottom: 30px;
    }
    .cta-button {
      display: inline-block;
      background-color: #ff6b6b;
      color: white;
      padding: 18px 35px;
      border-radius: 25px;
      text-decoration: none;
      font-size: 20px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .cta-button:hover {
      background-color: #ff9a9a;
      transform: translateY(-3px);
    }

    /* Services Section */
    .services {
      text-align: center;
      padding: 60px 20px;
      background-color: #ffffff;
    }
    .services h2 {
      font-family: 'Pacifico', cursive;
      font-size: 40px;
      color: #2e4f4f;
      margin-bottom: 30px;
    }
    .service-cards {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }
    .service-cards .card {
      background-color: #f9f9f9;
      border-radius: 15px;
      padding: 25px;
      width: 250px;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .service-cards .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }
    .service-cards .card img {
      width: 60px;
      height: 60px;
      margin-bottom: 15px;
    }
    .service-cards .card h3 {
      font-size: 24px;
      color: #ff6b6b;
      margin-bottom: 10px;
    }

    /* Testimonials Section */
    .testimonials {
      background-color: #ffdfdf;
      padding: 60px 20px;
      text-align: center;
    }
    .testimonials h2 {
      font-size: 40px;
      font-family: 'Pacifico', cursive;
      color: #2e4f4f;
      margin-bottom: 30px;
    }
    .testimonial-cards {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }
    .testimonial-card {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 25px;
      width: 280px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }
    .testimonial-card p {
      font-size: 18px;
      color: #555;
      margin-bottom: 20px;
    }
    .testimonial-card h4 {
      font-size: 20px;
      color: #ff6b6b;
      font-weight: bold;
    }

    /* Footer Section */
    footer {
      background-color: #ffdfdf;
      padding: 25px;
      text-align: center;
      box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
    }
    footer .footer-content ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 30px;
      margin-bottom: 20px;
    }
    footer .footer-content .social-icons a img {
      width: 35px;
      height: 35px;
      margin: 0 10px;
    }
    footer p {
      font-size: 14px;
      color: #4b7f52;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo"><img src="yourlogo.png" alt="Logo"></div>
    <nav>
      <ul>
        <li><a href="h">Home</a></li>
        <li><a href="a">About</a></li>
        <li><a href="s">Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to Our Happy World!</h1>
    <p>Bringing joy and creativity to your life!</p>
    <a href="#explore" class="cta-button">Join the Fun!</a>
  </section>

  <!-- Services Section -->
  <section class="services">
    <h2>What We Offer</h2>
    <div class="service-cards">
      <div class="card">
        <img src="cupcake-icon.png" alt="Cupcake">
        <h3>Delicious Treats</h3>
        <p>Freshly baked with love!</p>
      </div>
      <div class="card">
        <img src="brush-icon.png" alt="Brush">
        <h3>Creative Arts</h3>
        <p>Bringing your imagination to life!</p>
      </div>
      <div class="card">
        <img src="balloon-icon.png" alt="Balloon">
        <h3>Party Planning</h3>
        <p>Making every moment unforgettable!</p>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-cards">
      <div class="testimonial-card">
        <p>"This website makes me smile every time I visit!"</p>
        <h4>— Happy Customer</h4>
      </div>
      <div class="testimonial-card">
        <p>"The creativity is unmatched. A must-visit!"</p>
        <h4>— Satisfied Visitor</h4>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class="footer-content">
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
      <div class="social-icons">
        <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
        <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
      </div>
      <p>&copy; 2025 Your Website Name</p>
    </div>
  </footer>

</body>
</html>
