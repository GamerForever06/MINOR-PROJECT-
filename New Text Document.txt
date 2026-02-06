<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacy Parcels - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        /* --- Existing CSS from your original file --- */
        * { margin:0; padding:0; box-sizing:border-box; font-family: 'Mulish', sans-serif; scroll-behavior: smooth; }
        body { background-color: #F6F1F1; color: #4A4E69; overflow-x: hidden; }
        header { background: transparent; padding: 40px 20px; color: #4A4E69; display: flex; justify-content: space-between; align-items: center; position: fixed; width: 100%; z-index: 1000; transition: all 0.5s; }
        header.sticky { background-color: rgba(255,255,255,0.8); padding: 20px 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
        .logo { font-family: 'Great Vibes', cursive; font-size: 2.5rem; font-weight: bold; cursor: pointer; transition: transform 0.3s; position: relative; background: linear-gradient(45deg, #B5838D, #9A8C98); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .logo:hover { transform: scale(1.1); color: #6D6875; }
        .logo::after { content: ''; position: absolute; bottom: -2px; left: 50%; transform: translateX(-50%); width: 0; height: 2px; background: linear-gradient(45deg, #B5838D, #9A8C98); transition: width 0.3s ease; }
        .logo:hover::after { width: 100%; }
        nav ul { list-style: none; display: flex; gap: 40px; }
        nav a { color: #4A4E69; text-decoration: none; font-size: 1.2rem; font-weight: 600; padding: 10px 15px; transition: color 0.3s, transform 0.2s; border-radius: 8px; }
        nav a:hover { color: #9A8C98; transform: scale(1.05); }
        .signin-btn { background-color: #B5838D; color: white; padding: 8px 16px; border-radius: 8px; }
        .signin-btn:hover { background-color: #6D6875; }
        .hero { min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; background: linear-gradient(135deg, #DAD7D7, #FFF0F0); padding: 20px; text-align: center; animation: fadeIn 1.5s ease; }
        h1 { font-family: 'Great Vibes', cursive; font-size: 4rem; margin-bottom: 20px; color: #4A4E69; }
        p { font-size: 1.6rem; max-width: 800px; margin: 20px auto; color: #6D6875; line-height: 1.8; }
        a.cta-button { display: inline-block; margin-top: 40px; padding: 15px 30px; color: white; background-color: #B5838D; border-radius: 8px; font-size: 1.5rem; font-weight: 600; text-decoration: none; box-shadow: 0 10px 20px rgba(0,0,0,0.1); transition: all 0.3s; }
        a.cta-button:hover { background-color: #6D6875; transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,0.2); }
        .auth-section { display: flex; justify-content: space-around; flex-wrap: wrap; padding: 80px 20px; background: #F6F1F1; gap: 40px; }
        .auth-box { background: white; padding: 40px; border-radius: 12px; width: 100%; max-width: 400px; text-align: center; box-shadow: 0 8px 20px rgba(0,0,0,0.15); }
        .auth-box h2 { margin-bottom: 20px; color: #4A4E69; }
        .auth-box input { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 8px; }
        .auth-box button { width: 100%; padding: 12px; margin-top: 10px; border: none; border-radius: 8px; background: #B5838D; color: white; font-size: 1rem; font-weight: 600; cursor: pointer; transition: background 0.3s; }
        .auth-box button:hover { background: #6D6875; }
        @keyframes fadeIn { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        footer { background-color: #F6F1F1; color: #4A4E69; padding: 40px; text-align: center; border-top: 2px solid #DAD7D7; }
        footer a { color: #B5838D; text-decoration: none; font-weight: 600; }
        footer a:hover { color: #6D6875; }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header id="header">
        <div class="logo">Pacy Parcels</div>
        <nav>
            <ul>
                <li><a href="#home.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="delivery.html">Delivery Options</a></li>
                <li><a href="test.html">Contact Us</a></li>
                <li><a href="#auth-section" class="signin-btn">Sign In / Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Pacy Parcels</h1>
        <p>Delivering convenience, speed, and trust—all within your campus. Choose the best delivery options tailored just for you!</p>
        <a href="delivery.html" class="cta-button">Discover Our Services</a>
    </section>

    <!-- Signup/Login Section -->


   <section class="auth-section" id="auth-section">
    <!-- Signup -->
    <div class="auth-box">
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <!-- Login -->
    <div class="auth-box">
        <h2>Sign In</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Pacy Parcels. Crafted with passion and precision.</p>
    </footer>

    <!-- Sticky Header Script -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) { header.classList.add('sticky'); } 
            else { header.classList.remove('sticky'); }
        });
    </script>

<script>
window.onload = function() {
    const params = new URLSearchParams(window.location.search);
    if(params.get('signup') === 'success'){
        alert("Welcome To Pacy Parcels!");
        window.history.replaceState({}, document.title, "index.html");
    }
    if(params.get('signup') === 'error'){
        alert("Signup failed! Username or email may already exist.");
        window.history.replaceState({}, document.title, "index.html");
    }
};
</script>


</body>
</html>
