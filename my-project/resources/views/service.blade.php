<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services | Cute World</title>
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
      justify-content: center;
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
      margin-right: 50px;
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

    /* Services Section */
    .services {
      padding: 60px 20px;
      text-align: center;
      background-color: #ffffff;
    }
    .services h1 {
      font-size: 48px;
      font-family: 'Pacifico', cursive;
      color: #ff4f6b;
      margin-bottom: 30px;
    }
    .services p {
      font-size: 22px;
      color: #4e6c60;
      margin-bottom: 40px;
      max-width: 800px;
      margin: 0 auto;
    }

    .service-cards {
      display: flex;
      justify-content: center;
      gap: 30px;
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
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
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
        <li><a href="h">Home</a></li>
        <li><a href="a">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Services Section -->
  <section class="services">
    <h1>Our Cute Services</h1>
    <p>At Cute World, we offer a wide range of adorable services to make your life more joyful and colorful. Here's what we have for you:</p>
    <div class="service-cards">
      <div class="card">
        <img src="https://img.icons8.com/ios/50/000000/cake.png" alt="Delicious Treats">
        <h3>Delicious Treats</h3>
        <p>Handmade with love and the finest ingredients, our treats are perfect for satisfying your sweet cravings!</p>
      </div>
      <div class="card">
        <img src="https://img.icons8.com/ios/50/000000/paint-brush.png" alt="Creative Art">
        <h3>Creative Art</h3>
        <p>Transform your ideas into beautiful artworks! Whether it's for decoration or a special gift, we make it happen.</p>
      </div>
      <div class="card">
        <img src="https://img.icons8.com/ios/50/000000/party.png" alt="Fun Parties">
        <h3>Fun Parties</h3>
        <p>We throw the most fun, colorful, and memorable parties for any occasion. From planning to execution, we've got you covered!</p>
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
