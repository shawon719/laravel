<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to My Demo Website</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Student Details</a>
    <a href="#">Contact</a>
</nav>

<div class="container">
    <h2>About Us</h2>
    <p>This is a simple demo page for showcasing a basic website structure. You can customize it by adding more content, images, or features as needed.</p>

    <h3>Our Mission</h3>
    <p>We strive to build beautiful, responsive websites that meet the needs of our clients.</p>
</div>

<footer>
    <p>&copy; 2025 Demo Website | All Rights Reserved</p>
</footer>

<a href="{{ url('/h') }}">
    <button>Go to home Page</button>
</a>

</body>
</html>
