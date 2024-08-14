<?php 
require 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM menu");

$no_wa = 6283136382607;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pisang Piscok</title>

    <!-- Favicons -->
  <link href="assets/frontend/images/piscok.ico" rel="icon">
  <!-- <link href="../assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AppJS -->
     <script src="src/app.js"></script>
  </head>

  <body>
    <!-- Navbar start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <div class="mask-container">
        <main class="content">
          <h1>Mari Nikmati Pisang <span>Piscok</span></h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, enim.</p>
        </main>
      </div>
      <div class="orderwhatsapp">
          <a href="https://wa.me/<?php echo $no_wa ?>?text=Assalamualaikum warahmatullahi wabarakatuh 😊" target="_blank"><img src="img/whatsapp.svg"  width="100px"></a>
      </div>
    </section>
    <!-- Hero Section end -->

    

    <!-- About Section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih menu kami?</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ducimus voluptatum dolor. Et, voluptatum accusantium!</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt iure amet facilis eos a quo cum voluptates molestias nihil.</p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
      <h2><span>Menu</span> Kami</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora voluptatum.</p>

      <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <div class="menu-card">
          <img src="img/menu/<?= $row["gambar_produk"]; ?>" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- <?= $row["nama_produk"]; ?> -</h3>
          <p class="menu-card-price">IDR <?= $row["harga_produk"]; ?></p>
        </div>
        <?php endwhile; ?>
      </div>
    </section>
    <!-- Menu Section end -->

    <!-- Products Section start -->
    <section class="products" id="products" x-data="products">
      <h2><span>Produk Unggulan</span> Kami</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>

      <div class="row">
        <template x-for="(item, index) in items" x-key="index">
          <div class="product-card">
            <div class="product-icons">
              <a href="#" @click.prevent="$store.cart.add(item)">
                <svg
                  width="24"
                  height="24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <use href="img/feather-sprite.svg#shopping-cart" />
                </svg>
              </a>
              <a href="#" class="item-detail-button">
              <svg
                  width="24"
                  height="24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <use href="img/feather-sprite.svg#eye" />
                </svg>
              </a>
            </div>
            <div class="product-image">
              <img :src="`img/products/${item.img}`" :alt="item.name" />
            </div>
            <div class="product-content">
              <h3 x-text="item.name"></h3>
              <div class="product-stars">
              <svg
                  width="24"
                  height="24"
                  fill="currentColor"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <use href="img/feather-sprite.svg#star" />
                </svg>
              <svg
                  width="24"
                  height="24"
                  fill="currentColor"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <use href="img/feather-sprite.svg#star" />
                </svg>
              <svg
                  width="24"
                  height="24"
                  fill="currentColor"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <use href="img/feather-sprite.svg#star" />
                </svg>
              <svg
                  width="24"
                  height="24"
                  fill="currentColor"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <use href="img/feather-sprite.svg#star" />
                </svg>
              <svg
                  width="24"
                  height="24"
                  fill="currentColor"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <use href="img/feather-sprite.svg#star" />
                </svg>
              </div>
              <div class="product-price"><span x-text="rupiah(item.price)"></span></div>
            </div>
          </div>
        </template>
      </div>
    </section>
    <!-- Products Section end -->

    <!-- Galery Section start -->
    <section id="galery" class="galery">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col">
            <h2><span>Galery</span> Produk</h2>
            <p>Foto Berbagai dari semua produk dengan beberapa angel.</p>
          </div>
          <div class="row">
            <div class="col-md-3">
              <a href="#">
                <img src="img/galery/1.png" alt="gambar Produk 1" width="300" height="300" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <img src="img/galery/2.jpg" alt="gambar Produk 2" width="300" height="300" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <img src="img/galery/3.jpg" alt="gambar Produk 3" width="300" height="300" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <img src="img/galery/4.jpg" alt="gambar Produk 4" width="300" height="300" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <img src="img/galery/5.jpg" alt="gambar Produk 5" width="300" height="300" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <img src="img/galery/6.jpeg" alt="gambar Produk 6" width="300" height="300" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <img src="img/galery/1.png" alt="gambar Produk 7" width="300" height="300" class="img-fluid gallery-img" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Galery Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.</p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.328736852349!2d100.37237227364469!3d-0.897591835322064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8a38c3075e9%3A0xc58b5ea05034d0ce!2sJl.%20Raya%20Siteba%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1721921030659!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Section end -->

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

    <!-- Modal Box Item Detail start -->
    <div class="modal" id="item-detail-modal">
      <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
          <img src="img/products/1.png" alt="Product 1" />
          <div class="product-content">
            <h3>Product 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 30K <span>IDR 55K</span></div>
            <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Box Item Detail end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
