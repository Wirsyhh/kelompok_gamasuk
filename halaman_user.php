<?php
session_start();

// Inisialisasi keranjang
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Proses tambah ke keranjang
if (isset($_POST['add_to_cart'])) {
    $item = $_POST['item_name'];
    $price = $_POST['item_price'];

    if (isset($_SESSION['cart'][$item])) {
        $_SESSION['cart'][$item]['qty'] += 1;
    } else {
        $_SESSION['cart'][$item] = [
            'price' => $price,
            'qty' => 1
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman User</title>
    <link rel="stylesheet" href="css/user_page.css">
</head>
<body>


<header class="hero-header">
  <div class="overlay">
    <div class="hero-content" style="text-align: center;">
      <h1>Selamat Datang di Mangan Uenak</h1>
      <p>Pesan makanan favoritmu secara mudah dari rumah</p>
    </div>
  </div>
</header>


<h2>Selamat datang <?php echo $_SESSION['username']; ?></h2>
<a href="logout.php" style="position: absolute; top: 20px; right: 30px; padding: 10px 20px; background-color: #dc3545; color: white; border-radius: 5px; text-decoration: none;">
    Logout
</a>

<div class="product-card">
    <img src="img/makanan/ayam betutu.jpg" alt="Ayam Betutu">
    <h3>Ayam Betutu</h3>
    <p>Harga: Rp 35.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Ayam Betutu">
        <input type="hidden" name="item_price" value="35000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/ayam kremes.jpg" alt="Ayam Kremes">
    <h3>Ayam Kremes</h3>
    <p>Harga: Rp 28.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Ayam Kremes">
        <input type="hidden" name="item_price" value="28000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/bebek madura.jpg" alt="Bebek Madura">
    <h3>Bebek Madura</h3>
    <p>Harga: Rp 38.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Bebek Madura">
        <input type="hidden" name="item_price" value="38000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/gado-gado.jpg" alt="Gado-Gado">
    <h3>Gado-Gado</h3>
    <p>Harga: Rp 25.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Gado-Gado">
        <input type="hidden" name="item_price" value="25000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/ikan asam padeh.jpg" alt="Ikan Asam Padeh">
    <h3>Ikan Asam Padeh</h3>
    <p>Harga: Rp 40.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Ikan Asam Padeh">
        <input type="hidden" name="item_price" value="40000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/ikan bakar.jpg" alt="Ikan Bakar">
    <h3>Ikan Bakar</h3>
    <p>Harga: Rp 45.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Ikan Bakar">
        <input type="hidden" name="item_price" value="45000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/mie aceh.jpg" alt="Mie Aceh">
    <h3>Mie Aceh</h3>
    <p>Harga: Rp 27.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Mie Aceh">
        <input type="hidden" name="item_price" value="27000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/model palembang.jpg" alt="Model Palembang">
    <h3>Model Palembang</h3>
    <p>Harga: Rp 20.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Model Palembang">
        <input type="hidden" name="item_price" value="20000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/nasi goreng.jpg" alt="Nasi Goreng">
    <h3>Nasi Goreng</h3>
    <p>Harga: Rp 25.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Nasi Goreng">
        <input type="hidden" name="item_price" value="25000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/nasi liwet.jpg" alt="Nasi Liwet">
    <h3>Nasi Liwet</h3>
    <p>Harga: Rp 32.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Nasi Liwet">
        <input type="hidden" name="item_price" value="32000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/nasi putih.jpg" alt="Nasi Putih">
    <h3>Nasi Putih</h3>
    <p>Harga: Rp 8.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Nasi Putih">
        <input type="hidden" name="item_price" value="8000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/pempek.jpg" alt="Pempek">
    <h3>Pempek</h3>
    <p>Harga: Rp 22.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Pempek">
        <input type="hidden" name="item_price" value="22000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/rawon.jpg" alt="Rawon">
    <h3>Rawon</h3>
    <p>Harga: Rp 35.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Rawon">
        <input type="hidden" name="item_price" value="35000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/sate lilit.jpg" alt="Sate Lilit">
    <h3>Sate Lilit</h3>
    <p>Harga: Rp 30.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Sate Lilit">
        <input type="hidden" name="item_price" value="30000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/sate madura.jpg" alt="Sate Madura">
    <h3>Sate Madura</h3>
    <p>Harga: Rp 30.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Sate Madura">
        <input type="hidden" name="item_price" value="30000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/sop buntut.jpg" alt="Sop Buntut">
    <h3>Sop Buntut</h3>
    <p>Harga: Rp 55.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Sop Buntut">
        <input type="hidden" name="item_price" value="55000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/soto betawi.jpg" alt="Soto Betawi">
    <h3>Soto Betawi</h3>
    <p>Harga: Rp 38.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Soto Betawi">
        <input type="hidden" name="item_price" value="38000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/makanan/tahu gejrot.jpg" alt="Tahu Gejrot">
    <h3>Tahu Gejrot</h3>
    <p>Harga: Rp 15.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Tahu Gejrot">
        <input type="hidden" name="item_price" value="15000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>


<div class="product-card">
    <img src="img/minuman/bajigur.jpg" alt="Bajigur">
    <h3>Bajigur</h3>
    <p>Harga: Rp 15.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Bajigur">
        <input type="hidden" name="item_price" value="15000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/es cendol.jpg" alt="Es Cendol">
    <h3>Es Cendol</h3>
    <p>Harga: Rp 18.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Es Cendol">
        <input type="hidden" name="item_price" value="18000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/es jeruk peras.jpg" alt="Es Jeruk Peras">
    <h3>Es Jeruk Peras</h3>
    <p>Harga: Rp 12.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Es Jeruk Peras">
        <input type="hidden" name="item_price" value="12000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/es kacang merah.jpg" alt="Es Kacang Merah">
    <h3>Es Kacang Merah</h3>
    <p>Harga: Rp 20.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Es Kacang Merah">
        <input type="hidden" name="item_price" value="20000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/es kuwut.jpg" alt="Es Kuwut">
    <h3>Es Kuwut</h3>
    <p>Harga: Rp 18.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Es Kuwut">
        <input type="hidden" name="item_price" value="18000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/es lemon tea.jpg" alt="Es Lemon Tea">
    <h3>Es Lemon Tea</h3>
    <p>Harga: Rp 15.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Es Lemon Tea">
        <input type="hidden" name="item_price" value="15000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/es pisang ijo.jpg" alt="Es Pisang Ijo">
    <h3>Es Pisang Ijo</h3>
    <p>Harga: Rp 22.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Es Pisang Ijo">
        <input type="hidden" name="item_price" value="22000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/teh talua.jpg" alt="Teh Talua">
    <h3>Teh Talua</h3>
    <p>Harga: Rp 18.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Teh Talua">
        <input type="hidden" name="item_price" value="18000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<div class="product-card">
    <img src="img/minuman/wedang jahe.jpg" alt="Wedang Jahe">
    <h3>Wedang Jahe</h3>
    <p>Harga: Rp 15.000</p>
    <form method="post" action="">
        <input type="hidden" name="item_name" value="Wedang Jahe">
        <input type="hidden" name="item_price" value="15000">
        <button type="submit" name="add_to_cart" class="add-to-cart">Tambah</button>
    </form>
</div>

<a href="keranjang.php" class="cart-button">Lihat Keranjang</a>

</body>
</html>
