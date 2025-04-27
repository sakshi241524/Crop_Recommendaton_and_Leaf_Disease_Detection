<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/firstpage.css">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="logo">
            <h1>SeedScout</h1>
        </div>
        <div>
        <a href="firstpage.html">Home</a>
        <a href="aboutus.html">About</a>
        <a href="feedback-form.php">Feedback</a>
        <a href="contact.html">Contact</a>
        </div>
    </nav>
        <main>
            <section class="feedback-form">
                <div class="form-container">
                    <div class="form-box">
                        <h2>Get in touch</h2>
                        <form id="feedbackForm" action="sendmail.php" method="post">
                            <input type="text" name="name" id="name" placeholder="Your Name" required>
                            <input type="email" name="email" id="email" placeholder="Your Email" required>
                            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                            <input type="submit" class="submit-btn" value="Send Message">
                        </form>
                    </div>
                    <div class="illustration">
                        <img src="images/right_img.png" alt="Illustration">
                    </div>
                </div>
            </section>
            <footer class="footer">
            <div class="footer-container">
                <div class="footer-column">
                    <h3>SeedScout</h3>
                    <p>"Grow smarter with expert tips!"</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="firstpage.html">Home</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href=" http://127.0.0.1:5000">Predict</a></li>
                        <li><a href="feedback-form.php">Feedback</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Partners</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                    <a href="#" class="contact-btn">Contact Us</a>
                </div>
            </div>
            <div class="copyright">&copy; 2024-2025 All Rights Reserved.</div>
        </footer>
            </main>
    <script>
        window.addEventListener('scroll', function() {
          const navbar = document.getElementById('navbar');
          if (window.scrollY > 50) {
              navbar.classList.add('scrolled');
          } else {
              navbar.classList.remove('scrolled');
          }
      });
      let index = 0;
        function nextSlide() {
            index = (index + 1) % 2; 
            document.getElementById("slide").style.transform = `translateX(${-index * 100}%)`;
        }
        function prevSlide() {
            index = (index - 1 + 2) % 2; 
            document.getElementById("slide").style.transform = `translateX(${-index * 100}%)`;
        }
    </script>
</body>
</html>
