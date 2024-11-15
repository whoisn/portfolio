<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
/* Footer Contact Section */
.footer-contact {
  display: flex;
  flex-direction: column; /* Stack sections vertically */
  align-items: center;
  background-color: #2a2d3a;
  color: #fff;
  padding: 50px;
  box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.2);
  animation: fadeInUp 0.8s ease-out;
  border-radius: 8px;
}

.work-together {
  text-align: center;
  margin-bottom: 30px; /* Space below Let's Work Together section */
  max-width: 600px;
  animation: fadeInUp 1s ease-out;
}

.work-together h2 {
  font-size: 2rem; /* Slightly smaller font size */
  color: #f1c40f;
  margin-bottom: 10px;
}

.work-together p {
  color: #ddd;
  font-size: 1rem;
  line-height: 1.5;
}

.contact-form {
  width: 60%; /* Make the form section wider */
  padding: 30px;
  border-radius: 8px 0 0 8px; /* Rounded only on the left */
  background-color: #333;
  box-shadow: inset -1px 0 0 #555, 0 4px 8px rgba(0, 0, 0, 0.3); /* Border and shadow between form and info */
}

.contact-info {
  width: 40%; /* Make the info section narrower */
  padding: 30px;
  background-color: #333;
  border-radius: 0 8px 8px 0; /* Rounded only on the right */
  height: 319px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Added shadow */
}

.contact-form h3, .contact-info h3 {
  font-size: 1.5rem;
  margin-bottom: 15px;
  color: #f1c40f;
}

.contact-form form {
  display: flex;
  flex-direction: column;
}

.form-group {
  display: flex;
  gap: 15px;
}

.form-group input,
.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #555;
  border-radius: 5px;
  background-color: #444;
  color: #fff;
}

.contact-form button {
  padding: 10px 20px;
  background-color: #ff5a5f;
  border: none;
  border-radius: 5px;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 1s ease;
}

.contact-form button:hover {
  background-color: #ff787b;
}

.contact-info p {
  margin-bottom: 15px;
}

.contact-info a {
  color: #f1c40f;
  text-decoration: none;
}

.social-icons a {
  margin-right: 10px;
  color: #f1c40f;
  font-size: 1.2rem;
  transition: transform 0.3s ease;
}

.social-icons a:hover {
  transform: scale(1.1);
}

/* Animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Let's Work Together Section */
.work-together {
  max-width: 600px;
  margin: 0 auto 30px;
  text-align: center;
  animation: fadeInUp 1s ease-out;
}

.work-together h2 {
  font-size: 2.5rem;
  color: #f1c40f;
  margin-bottom: 15px;
}
.contact-container {
  display: flex;
  width: 100%;
  max-width: 800px; /* Adjust width as needed */
  margin-top: -5px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.work-together p {
  color: #ddd;
  font-size: 1rem;
  line-height: 1.5;
}

/* Zoom-in animation */
.zoom-in {
  transform: scale(0.8);
  opacity: 0;
  animation: zoomInEffect 1.2s ease forwards;
}

@keyframes zoomInEffect {
  from {
    transform: scale(0.8);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}
/* Footer Bottom Section */
.footer-bottom {
  text-align: center;
  color: #aaa;
  padding: 10px;
  background-color: #2a2d3a; /* Matches the main footer background */
  font-size: 0.9rem;
}

.footer-line {
  width: 80%;
  margin: 0 auto 10px;
  border: none;
  height: 1px;
  background-color: #555; /* Subtle line color */
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.3); /* Adds a subtle shadow */
}

.footer-bottom p {
  margin: 5px 0;
  font-weight: 300;
}

.footer-bottom p a {
  color: #f1c40f; /* Matches the accent color used in the footer */
  text-decoration: none;
}

.footer-bottom p a:hover {
  color: #ff5a5f; /* Slight color change on hover for links */
}
/* Fade-in animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-on-scroll {
  opacity: 0; /* Hidden initially */
  transition: opacity 0.8s, transform 0.8s;
}

.animate-on-scroll.visible {
  opacity: 1;
  transform: translateY(0);
  animation: fadeInUp 0.8s forwards; /* Apply fadeInUp animation */
}


</style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
  <div class="container">
    <a href="#" class="logo">Niel.</a>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#footer-contact">Contact</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
    </ul>
  </div>
</nav>

<!-- Hero Section -->
<div class="main-content zoom-in">

<section class="hero animate-on-scroll" >
  <div class="container hero-layout">
    <div class="hero-content">
      <h1>My Name is Niel Castillo</h1>
      <p id="typed-text" class="tagline"></p>
      <p>I am excited to help and build your ideas. With the help of communication, we can do it.</p>
      <a href="#footer-contact" class="btn-primary">Contact Me</a>
    </div>
    <img src="image/profile.png" alt="Profile" class="profile-img animated-image">
  </div>
</section>

<!-- Services Section -->
<section id="services" class="services animate-on-scroll">
  <div class="container">
    <h2>Services</h2>
    <div class="service-list">
      <div class="service">
        <h3>Web Development</h3>
        <p>I can create simple web solutions that are not only visually 
          captivating but also functional and optimized for performance.</p>
      </div>
      <div class="service">
        <h3>App Development</h3>
        <p>I can create a custom mobile and web application. From idea to 
          deployment, I create scalable, user-friendly apps tailored to meet your goals.</p>
      </div>
      <div class="service">
        <h3>UI/UX Designing</h3>
        <p>Using Figma, I bring concepts to life with intuitive, visually engaging designs that prioritize user experience, 
          ensuring every interaction feels effortless.</p>
      </div>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills animate-on-scroll">
  <div class="container">
    <h2>Skills</h2>
    <div class="skills-category">
      <h3>Front-end</h3>
      <div class="skills-list">
        <div class="skill-item">
          <img src="image/javascript.png" alt="JavaScript">
          <p>JavaScript</p>
        </div>
        <div class="skill-item">
          <img src="image/reacts.png" alt="React">
          <p>React</p>
        </div>
        <div class="skill-item">
          <img src="image/htmls.png" alt="HTML5">
          <p>HTML5</p>
        </div>
        <div class="skill-item">
          <img src="image/csss.png" alt="CSS3">
          <p>CSS3</p>
        </div>
        <!-- <div class="skill-item">
          <img src="image/sass.png" alt="Sass">
          <p>Sass</p>
        </div> -->
        <div class="skill-item">
          <img src="image/bootstraps.png" alt="Bootstrap">
          <p>Bootstrap</p>
        </div>
      </div>
    </div>
    <div class="skills-category">
      <h3>Back-end</h3>
      <div class="skills-list">
        <div class="skill-item">
          <img src="image/mysql.png" alt="MongoDB">
          <p>MySQL</p>
        </div>
        <!-- <div class="skill-item">
          <img src="image/nodes.png" alt="Node.js">
          <p>Node.js</p>
        </div> -->
        <div class="skill-item">
          <img src="image/pythons.png" alt="Python">
          <p>Python</p>
        </div>
        <div class="skill-item">
          <img src="image/firebases.png" alt="Firebase">
          <p>Firebase</p>
        </div>
      </div>
    </div>
    <div class="skills-category">
      <h3>Other</h3>
      <div class="skills-list">
        <div class="skill-item">
          <img src="image/github.png" alt="Git">
          <p>Git</p>
        </div>
        <div class="skill-item">
          <img src="image/figma.png" alt="Linux">
          <p>Figma</p>
        </div>
        <div class="skill-item">
          <img src="image/trello.png" alt="Jest">
          <p>Trello</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<footer>

  <div id="footer-contact" class="footer-contact animate-on-scroll">
  <div class="work-together">
    <h2>Let's Work Together</h2>
    <p>Feel free to reach out for collaborations or just a friendly hello 👋</p>
  </div>
  <div class="contact-container">
    <div class="contact-form animate-on-scroll">
      <h3>Get in Touch</h3>
      <form action="contact-form.php" method="post">
        <div class="form-group">
          <input type="text" name="name" placeholder="Enter Name..." required>
          <input type="email" name="email" placeholder="Enter Email..." required>
        </div>
        <input type="text" name="subject" placeholder="Enter Subject..." required>
        <textarea name="comment" placeholder="Enter Comment..." required></textarea>
        <button type="submit">Send Me</button>
      </form>
    </div>
 
    <div class="contact-info animate-on-scroll">
      <h3>Contact Information</h3>
      <p>E-Mail: <a href="mailto:nielcastillo00@gmail.com">nielcastillo00@gmail.com</a></p>
      <p>Address: <span>Tanauan City Batangas, Philippines</span></p>
      <p>Phone: <a href="tel:+1234567890">+639764280550</a></p>
      <div class="social-icons">
        <a href="https://www.facebook.com/nielcastillo.148"><i class="fab fa-facebook-f"></i></a>
        <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
        <a href="https://www.linkedin.com/in/nielcastillooo"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/nielcastillo?igsh=MXhmb2p3YWhoaDY5bQ%3D%3D&utm_source=qr"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="footer-bottom">
  <hr class="footer-line">
  <p>© All Rights Reserved 2025</p>
  <p>Developed by Niel Castillo</p>
</div>

</footer>




<!-- <footer class="footer" id="contact">
  <div class="container">
    <h2>Contact Me</h2>
    <div class="contact-info">
      <div class="contact-item">
        <span>📧</span> <a href="mailto:nielcastillo220@gmail.com">nielcastillo220@gmail.com</a>
      </div>
      <div class="contact-item">
        <span>📞</span> <a href="tel:+0971550704">09764280550</a>
      </div>
      <div class="contact-item">
        <span>📍</span> Batangas, Philippines
      </div>
    </div>
    <div class="social-links">
      <a href="#"><img src="image/twitter.png" alt="Twitter"></a>
      <a href="https://www.facebook.com/nielcastillo.148"><img src="image/facebook.png" alt="Facebook"></a>
      <a href="https://www.linkedin.com/in/nielcastillooo"><img src="image/linkedin.png" alt="LinkedIn"></a>
      <a href="#"><img src="image/github.png" alt="GitHub"></a>
    </div>
    <p>“Thanks for Scrolling”</p>
  </div>
</footer> -->

<!-- Chatbot Button and Container -->
<button class="chatbot-toggle" id="chatbot-toggle">💬</button>

<div class="chatbot-container" id="chatbot-container">
  <div class="chatbot-header">
    <h3>Chat with my NeBot</h3>
    <button id="chatbot-close" class="close-btn">✖️</button>
  </div>
  <div class="chatbot-messages" id="chatbot-messages">
    <!-- Initial Message -->
    <div class="message bot-message">Hi! I'm here to help. Type a message or select an option below.</div>
  </div>
  <div class="chatbot-input">
    <input type="text" id="chatbot-input" placeholder="Type a message..." autocomplete="off">
    <button id="send-btn">Send</button>
  </div>
  <!-- Suggested Replies -->
  <div class="chatbot-suggestions">
    <button onclick="sendSuggestedMessage('Skills')">Skills</button>
    <button onclick="sendSuggestedMessage('Experience')">Experience</button>
    <button onclick="sendSuggestedMessage('Portfolio')">Portfolio</button>
    <button onclick="sendSuggestedMessage('Contact')">Contact</button>
  </div>
</div>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Include SweetAlert2 -->
<script>
  window.addEventListener("load", function() {
    document.querySelector(".main-content").classList.add("zoom-in");
  });

  document.querySelector("form").onsubmit = async (event) => {
    event.preventDefault(); // Prevent form from refreshing the page
    const formData = new FormData(event.target);

    // Display loading alert
    Swal.fire({
      title: 'Submitting...',
      text: 'Please wait while we submit your message.',
      allowOutsideClick: false,
      didOpen: () => {
        Swal.showLoading(); // Show loading spinner
      }
    });

    try {
      const response = await fetch("contact-form.php", {
        method: "POST",
        body: formData
      });
      const result = await response.text();

      // Close the loading alert
      Swal.close();

      // Display success alert
      Swal.fire({
        title: 'Success!',
        text: result, // Use the result returned by the PHP script
        icon: 'success',
        confirmButtonText: 'OK'
      });

      // Optionally, clear the form after successful submission
      event.target.reset();

    } catch (error) {
      // Close the loading alert
      Swal.close();

      // Display error alert
      Swal.fire({
        title: 'Error!',
        text: 'There was a problem submitting the form. Please try again later.',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    }
  };

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".animate-on-scroll");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible"); // Trigger animation
      } else {
        entry.target.classList.remove("visible"); // Remove animation when out of view
      }
    });
  }, {
    threshold: 0.2 // Trigger when 20% of the section is visible
  });

  sections.forEach((section) => observer.observe(section));
});

</script>
</body>
</html>
