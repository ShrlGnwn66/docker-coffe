<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Gunawan CoffeeShop</title>
  </head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#home" class="navbar-logo">Gunawan <span>CoffeeShop.</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search">
          <i data-feather="search"></i>
        </a>

        <a href="#" id="shopping-cart">
          <i data-feather="shopping-cart"></i>
        </a>

        <a href="#" id="hamburger-menu">
          <i data-feather="menu"></i>
        </a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari <span>Ngopi !!</span></h1>
        <p class="paragraf">
          Rasakan kenikmatan hidup dengan segelas kopi berkualitas.
        </p>
        <a href="order.php" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
        </div>

        <div class="content">
          <h3>Kenapa Gunawan CoffeeShop?</h3>
          <p>
            Gunawan Coffeeshop adalah tempat yang ideal bagi para pecinta kopi
            yang mencari suasana nyaman dan hangat.
          </p>
          <p>
            Dengan mengutamakan kualitas, Gunawan Coffeeshop menyajikan kopi
            berkualitas tinggi yang disajikan oleh barista yang terlatih dan
            ramah.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
      <h2><span>Menu</span> Kami</h2>
      <p>
        Berikut ini terdapat beragam pilihan menu kopi yang cocok untuk
        dinikmati saat waktu luang.
      </p>

      <div class="row">
        <div class="menu-card">
          <img
            src="img/menu/Espresso.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <img
            src="img/menu/americano.jpg"
            alt="Americano"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Americano -</h3>
          <p class="menu-card-price">IDR 16K</p>
        </div>
        <div class="menu-card">
          <img
            src="img/menu/cappuccino.jpg"
            alt="Cappuccino"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Cappuccino -</h3>
          <p class="menu-card-price">IDR 18K</p>
        </div>
        <div class="menu-card">
          <img
            src="img/menu/coffee-latte.jpg"
            alt="Coffee Latte"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Coffee Latte -</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/frappe.jpg" alt="Frappe" class="menu-card-img" />
          <h3 class="menu-card-title">- Frappe -</h3>
          <p class="menu-card-price">IDR 12K</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/mocha.jpg" alt="Mocha" class="menu-card-img" />
          <h3 class="menu-card-title">- Mocha -</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
      </div>
    </section>
    <!-- Menu Section End -->

    <!-- Contact Section Start-->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Butuh bantuan segera? Silakan hubungi layanan pelanggan kami sekarang.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31598.45199392245!2d113.39713129977848!3d-8.121174482117985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd68acd81f3e4d3%3A0x54e9d175a2ac1f61!2sPringgowirawan%2C%20Kec.%20Sumberbaru%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1684077101780!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="" method="post">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" name="nama" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" name="phone" placeholder="Phone" />
          </div>
          <div class="input-group">
            <i data-feather="message-square"></i>
            <input type="text" name="pesan" placeholder="Message" />
          </div>
          <button type="submit" name="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>

    <!-- Method Post Form -->
    <!-- <?php

    $connect = new mysqli('mysql_db','root','root','coffe');


    if (isset($_POST['submit'])) {
        $nama = $_REQUEST['nama'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $pesan = $_REQUEST['pesan'];

    $query = mysqli_query($connect, "INSERT INTO saran (nama, email, phone, pesan) VALUES ('$nama', '$email', '$phone', '$pesan')");
    if ($query) {
      echo "<script>alert('Kritik dan pesan yang anda inputkan berhasil terkirim.')</script>";
    } else {
      echo "<script>alert('Kritik dan pesan yang anda inputkan gagal terkirim.')</script>";
    }

    }

  
    
    mysqli_close($connect);
    ?> -->

    <!-- Contact Section End-->

    <!-- Footer Start -->
    <footer>
      <div class="socials">
        <a href="https://www.instagram.com/shrlgn05">
          <i data-feather="instagram"></i>
        </a>
        <a href="https://twitter.com/Gunawan0_">
          <i data-feather="twitter"></i>
        </a>
        <a href="https://api.whatsapp.com/send?phone=6285748540644">
          <i data-feather="message-circle"></i>
        </a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created By <a href="">Sahrul Gunawan</a>. | &copy; 2023</p>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- JS Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript Pribadi -->
    <script src="js/script.js"></script>
  </body>
</html>

