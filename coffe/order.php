<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <title>Gunawan CoffeeShop</title>
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar">
    <a href="index.php#home" class="navbar-logo">Gunawan <span>CoffeeShop.</span></a>

    <div class="navbar-nav">
      <a href="index.php#home">Home</a>
      <a href="index.php#about">Tentang Kami</a>
      <a href="index.php#menu">Menu</a>
      <a href="index.php#contact">Kontak</a>
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

  <!-- body Order start -->
  <div class="container">
    <div class="title">
      <h2>Silahkan Pilih <span>Pesanan anda</span></h2>
    </div>

    <!-- Form Order Start -->
    <form class="d-flex" method="post" action="">
      <div class="form-order">
        <label>
          <span class="name">Nama <span class="required">*</span></span>
          <input type="text" name="nama" placeholder="Nama..." required />
        </label>
        <label>
          <span>Nomor Kursi <span class="required">*</span></span>
          <input type="number" name="nomor_kursi" placeholder="Nomor Kursi..." required />
        </label>
        <label>
          <span>Pesanan Kopi <span class="required">*</span></span>
          <!-- Menu Dinamis From DB start -->
          <?php
          $connect = new mysqli('mysql_db', 'root', 'root', 'coffe');
          $getproduct = "SELECT * FROM produk";
          $result = mysqli_query($connect, $getproduct);
          ?>
          <select id="selection" name="menu" required>
            <option value="select" disabled selected>Pilih Kopi...</option>
            <?php
            // Loop melalui hasil query dan menampilkan opsi pilihan
            while ($row = mysqli_fetch_assoc($result)) {
              $nama_produk = $row['nama_produk'];
              echo '<option value="' .  $nama_produk . '">' . $nama_produk . '</option>';
            }
            mysqli_close($connect);
            ?>
          </select>
          <!-- Menu Dinamis From DB End -->

        </label>
        <label>
          <span>Phone</span>
          <input type="tel" name="phone" placeholder="Telephone ..." />
        </label>
        <label>
          <span>Email Address</span>
          <input type="email" name="email" placeholder="Email ..." />
        </label>
      </div>

      <!-- Your Order  -->
      <div class="Yorder">
        <table>
          <tr>
            <th colspan="2" class="title_your_order">Your order</th>
          </tr>
          <tr>
            <td class="product-name" id="product-name">Pilih Kopi</td>
            <td class="price" id="price" name="harga">Rp00</td>
          </tr>
          <tr>
            <td>Subtotal</td>
            <td id="subtotal" class="total" name="subtotal">Rp00</td>
          </tr>
        </table>
        <br />
        <div class="count">
          <div class="count-button" onclick="increment()">+</div>
          <input type="text" id="inputField" name="quantity" value="1" readonly />
          <div class="count-button" onclick="decrement()">-</div>
        </div>
        <button class="order-button" type="submit" name="order">Order Now</button>
      </div>
      <!-- Yorder -->
    </form>
    <!-- Form Order End -->
  </div>
  <!-- body Order end -->

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
      <a href="index.php#home">Home</a>
      <a href="index.php#about">Tentang Kami</a>
      <a href="index.php#menu">Menu</a>
      <a href="index.php#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created By <a href="">Sahrul Gunawan</a>. | &copy; 2023</p>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Javascript  -->
  <script src="js/script.js"></script>
</body>

</html>

<!-- Kirim data dari Form ke DB -->
<?php
// Connect to DB 
$connect = new mysqli('mysql_db', 'root', 'root', 'coffe');

// Bagian insert Form Saran
if (isset($_POST['order'])) {
  $nama = $_REQUEST['nama'];
  $nomor_kursi = $_REQUEST['nomor_kursi'];
  $menu = $_REQUEST['menu'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $quantity = $_REQUEST['quantity'];

  // Waktu GMT +7
  date_default_timezone_set('Asia/Jakarta');
  $waktu_pesanan = date('Y-m-d H:i:s');

  $query = mysqli_query($connect, "INSERT INTO pesanan (nama, nomor_kursi, menu, phone, email, quantity, waktu_pesanan) VALUES ('$nama', '$nomor_kursi', '$menu', '$phone', '$email', '$quantity', '$waktu_pesanan')");
  if ($query) {
    echo "<script>alert('Pesanan anda berhasil terkirim, tunggu hingga pesanan datang.'); window.location = 'index.php';</script>";
  } else {
    echo "<script>alert('Pesanan anda gagal terkirim, coba kembali.')</script>" . mysqli_error($connect);
  }
}
mysqli_close($connect);
?>