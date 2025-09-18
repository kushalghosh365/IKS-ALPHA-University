<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hogwarts University</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container header-container">
        <h1 class="logo"><img src="images/ikslogo.png" alt="IKS logo" id="ikslogo" style="height: 60px; width: 60px;"/>IKS ALPHA University</h1>
        <nav>
          <ul>
            <li><a href="index2.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown">
              <a href="#courses">Courses</a>
              <ul class="dropdown-content">
                <li>
                  <a href="#data-science">Computer Science Engineering</a>
                </li>
                <li><a href="#full-stack">Information Technology</a></li>
                <li><a href="#machine-learning">AI-ML</a></li>
                <li><a href="#cloud-computing">Data Science</a></li>
                <li><a href="#cyber-security">Graphics Designing</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <img src="images/friends.png" alt="developer photos" style="height: 90px; width:140px;">
        <div class="auth-buttons">
          <a href="index.php"><button>Login</button></a>
          <a href="index.php" id="registerbut"><button>Register</button></a>
        </div>
      </div>
    </header>

    <!-- Slider Section -->
    <section id="slider" class="slider">
      <div class="slider-container">
        <div class="slides">
          <img src="images/slide1.jpg" alt="Slide 1" />
          <img src="images/slide2.jpg" alt="Slide 2" />
          <img src="images/slide3.jpg" alt="Slide 3" />
        </div>

        <!-- Navigation Arrows -->
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
      <h2>About</h2>
      <p>
        Welcome to IKS ALPHA University, where innovation meets excellence in education! Founded on the principles of creativity and technical skill, our university is dedicated to preparing the next generation of engineers to tackle the challenges of tomorrow.
<br>

At IKS ALPHA University, we empower aspiring engineers to innovate, create, and bring their ideas to life. Our diverse programs span various fields, including Advanced Robotics, Materials Science, and Computational Engineering. Students build a strong foundation in engineering principles while exploring the unique possibilities of merging technology and creativity.
<br>

Discover the powerful integration of engineering expertise and innovative practices at IKS ALPHA University, where we push the boundaries of what is possible. Our faculty comprises experienced engineers and industry professionals dedicated to guiding students through their academic and professional journeys.
<br>

With a commitment to academic rigor and groundbreaking research, IKS ALPHA University is focused on developing leaders in the engineering field. Our hands-on approach equips students with practical experience, preparing them for the dynamic engineering landscape.
<br>

At IKS ALPHA University, we believe in the importance of collaboration. Our diverse community fosters teamwork among students and faculty, driving innovation and addressing complex engineering challenges. We promote a culture of creativity and critical thinking, encouraging students to explore unique perspectives in their problem-solving approaches.
<br>

We are dedicated to sustainable engineering practices that honor our environment while paving the way for a better future. Our programs emphasize the importance of global engineering challenges, preparing students to adapt and thrive in an interconnected world.

Join us at IKS ALPHA University, where your journey toward becoming a leader in engineering begins! Together, we will shape the future of technology and innovation, unlocking new realms of possibility.
      </p>
      <p style="padding-left: 50%; ">Director:Kushal</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section">
      <h2>Contact Us</h2>
      <p>Email: support@Hogwarts.com</p>
      <p>Phone: +91 (555) 123-4567</p>
      <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style="color: green;">
        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
      </svg>Whatsapp: +91 7361234567</p>
    </section>

    <!-- Footer -->
    <footer>
      <p>&copy; 2024 IKS ALPHA University. All Rights Reserved.</p>
      <div class="social-links">
        <a href="https://facebook.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg></i></a>
        <a href="https://twitter.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
        </svg></a>
        <a href="https://instagram.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg></a>
        <a href="https://linkedin.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
        </svg></a>
      </div>
    </footer>

    <script src="script2.js"></script>
    <script src="script.js"></script>
  </body>
</html>
