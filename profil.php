<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Pengusaha</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
    <style>
      /* profile pengusaha */

      .about-us {
        display: flex;
        align-items: center;
        height: 100vh;
        width: 100%;
        padding: 90px 0;
        background: #555e4f;
      }

      .pic {
        height: auto;
        width: 400px;
        border-radius: 12px;
      }

      .about {
        width: 1130px;
        max-width: 85%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .text {
        width: 540px;
      }

      .text h2 {
        color: #333;
        font-size: 90px;
        font-weight: 600;
        margin-bottom: 10px;
      }

      .text h5 {
        color: #333;
        font-size: 22px;
        font-weight: 500;
        margin-bottom: 20px;
      }

      span {
        color: #4070f4;
      }

      .text p {
        color: #333;
        font-size: 18px;
        line-height: 25px;
        letter-spacing: 1px;
      }

      .data {
        margin-top: 30px;
      }

      .hire {
        font-size: 18px;
        background: #4070f4;
        color: #fff;
        text-decoration: none;
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        transition: 0.5s;
      }

      .hire:hover {
        background: #000;
      }
    </style>
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AppJS -->
    <script src="src/app.js"></script>
  </head>
  <body>
    <!-- Navbar start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar end -->
    <!-- about us start -->
    <section class="about-us">
      <div class="about">
        <img src="img/chefjuna.jpeg" class="pic" />
        <div class="text">
          <h2>About Us</h2>
          <h5>Front-end Developer & <span>Designer</span></h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis!
            Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!
          </p>
          <div class="data">
            <a href="#" class="hire">Hire Me</a>
          </div>
        </div>
      </div>
    </section>
    <!-- about us end -->
    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">randzcode</a>. | &copy; 2024.</p>
      </div>
    </footer>
    <!-- Footer end -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
