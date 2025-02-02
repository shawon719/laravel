<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Cute World</title>
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

    /* About Section */
    .about {
      padding: 60px 20px;
      text-align: center;
      background-color: #ffffff;
    }
    .about h1 {
      font-size: 48px;
      font-family: 'Pacifico', cursive;
      color: #ff4f6b;
      margin-bottom: 30px;
    }
    .about p {
      font-size: 22px;
      color: #4e6c60;
      max-width: 800px;
      margin: 0 auto 40px;
    }
    .about img {
      width: 250px;
      height: 250px;
      border-radius: 50%;
      margin-bottom: 30px;
    }

    /* Call to Action Section */
    .cta-section {
      background-color: #ffe0eb;
      padding: 60px 20px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }
    .cta-section h2 {
      font-size: 36px;
      font-family: 'Pacifico', cursive;
      color: #ff6b81;
      margin-bottom: 30px;
    }
    .cta-section p {
      font-size: 20px;
      color: #4e6c60;
      margin-bottom: 30px;
    }
    .cta-button {
      background-color: #ff7f9f;
      color: white;
      padding: 18px 40px;
      border-radius: 35px;
      font-size: 22px;
      text-decoration: none;
      transition: background-color 0.3s, transform 0.3s ease;
    }
    .cta-button:hover {
      background-color: #ff4f6b;
      transform: translateY(-5px);
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
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- About Section -->
  <section class="about">
    <h1>About Cute World</h1>
    <img src="https://via.placeholder.com/250" alt="Cute World">
    <p>Welcome to Cute World, the place where imagination meets playfulness! We’re dedicated to creating a fun and colorful experience for people of all ages. Whether you're looking for delicious treats, creative art, or the perfect party vibes, we've got it all. Our team is passionate about making the world a little cuter, one delightful creation at a time.</p>
  </section>

  <!-- Call to Action Section -->
  <section class="cta-section">
    <h2>Join the Cute Revolution!</h2>
    <p>Want to be part of our creative and fun community? Explore, create, and share your joy with us today!</p>
    <a href="#explore" class="cta-button">Get Started</a>
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
