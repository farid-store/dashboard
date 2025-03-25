<?php
session_start();
include 'db.php';

// Pastikan hanya admin yang bisa mengakses
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Handle tambah anggota
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_member'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    // Validasi data (hindari input kosong)
    if (!empty($name) && !empty($email) && !empty($_POST['password']) && !empty($contact) && !empty($city) && !empty($address) && !empty($role)) {
        $query = "INSERT INTO users (name, email, password, contact, city, address, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssss", $name, $email, $password, $contact, $city, $address, $role);

        if ($stmt->execute()) {
            echo "<script>alert('Anggota berhasil ditambahkan!');</script>";
        } else {
            echo "<script>alert('Gagal menambahkan anggota!');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Semua field harus diisi!');</script>";
    }
}

// Handle tambah produk
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    if (!empty($name) && !empty($price) && is_numeric($price)) {
        $query = "INSERT INTO items (name, price) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si", $name, $price);
        if ($stmt->execute()) {
            echo "<script>alert('Produk berhasil ditambahkan!');</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk!');</script>";
        }
        $stmt->close();
    }
}

// Query total anggota & produk
$totalMembers = $conn->query("SELECT COUNT(*) AS total FROM users")->fetch_assoc()['total'];
$totalProducts = $conn->query("SELECT COUNT(*) AS total FROM items")->fetch_assoc()['total'];

// Menghitung jumlah barang yang berstatus 'Confirmed' dan 'Add to Cart'
$totalConfirmed = $conn->query("SELECT COUNT(*) AS total FROM users_items WHERE status = 'Confirmed'")->fetch_assoc()['total'];
$totalCart = $conn->query("SELECT COUNT(*) AS total FROM users_items WHERE status = 'Added to Cart'")->fetch_assoc()['total'];

// Menghitung total harga barang yang belum 'Confirmed' (misalnya masih 'Pending' atau 'Add to Cart')
$totalUnconfirmedPrice = $conn->query("
    SELECT SUM(items.price) AS total 
    FROM users_items 
    JOIN items ON users_items.item_id = items.id 
    WHERE users_items.status NOT IN ('Confirmed')
")->fetch_assoc()['total'] ?? 0;

// Menghitung total harga barang yang sudah 'Confirmed'
$totalConfirmedPrice = $conn->query("
    SELECT SUM(items.price) AS total 
    FROM users_items 
    JOIN items ON users_items.item_id = items.id 
    WHERE users_items.status = 'Confirmed'
")->fetch_assoc()['total'] ?? 0;

?>





<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; margin: 0; background: #f4f4f4; }
        .sidebar {
    width: 250px;
    height: 100vh;
    background: #2c3e50;
    color: white;
    padding: 20px;
    position: fixed;
    transition: all 0.3s ease;
}

.sidebar h2 {
    text-align: center;
    font-size: 22px;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    text-decoration: none;
    color: white;
    display: flex;
    align-items: center;
    padding: 12px;
    background: #34495e;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-size: 16px;
}

.sidebar ul li a i {
    margin-right: 10px;
    font-size: 18px;
    transition: transform 0.3s ease;
}

/* Efek Hover */
.sidebar ul li a:hover {
    background: #1abc9c;
    transform: translateX(5px);
}

.sidebar ul li a:hover i {
    transform: rotate(360deg);
}

/* Untuk konten agar tidak tertutup sidebar */
.content {
    margin-left: 270px;
    padding: 20px;
    width: calc(100% - 270px);
}

.hidden {
    display: none;
}

        .stats { display: flex; gap: 20px; }
        .stat-box { background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); }
        form { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); width: 50%; margin-top: 20px; }
        input, button { width: 100%; padding: 10px; margin-top: 10px; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #2c3e50; color: white; }
        .stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 16px;
    padding: 20px;
}

.stat-box {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-box i {
    font-size: 30px;
    margin-bottom: 10px;
    display: block;
}

.stat-box p {
    font-size: 16px;
    margin: 5px 0;
    font-weight: bold;
}

.stat-box strong {
    font-size: 24px;
    color: #333;
}

/* Hover Effect */
.stat-box:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
}

/* Warna spesifik berdasarkan kategori */
.confirmed { background: #d4edda; color: #155724; }
.cart { background: #fff3cd; color: #856404; }
.pending { background: #f8d7da; color: #721c24; }
.revenue { background: #cce5ff; color: #004085; }

/* Responsif */
@media (max-width: 600px) {
    .stats {
        grid-template-columns: 1fr;
    }
}

    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
        <li><a href="#" onclick="showContent('dashboard')">🏠 Dashboard</a></li>
        <li><a href="#" onclick="showContent('members')">👥 Daftar Anggota</a></li>
        <li><a href="#" onclick="showContent('add_member')">➕ Tambah Anggota</a></li>
        <li><a href="#" onclick="showContent('products')">📦 Daftar Produk</a></li>
        <li><a href="#" onclick="showContent('add_product')">➕ Tambah Produk</a></li>
        <li><a href="#" onclick="showContent('order')">🛒 Daftar Pesanan</a></li>
        <li><a href="logout_script.php" class="logout">🚪 Logout</a></li>
    </ul>
</div>

<!-- Konten -->
<div class="content">
    <div id="dashboard" class="page">
        <h1>Selamat Datang, Admin</h1>
        <div class="stats">
    <div class="stat-box">
        <i class="fas fa-users"></i>
        <p>Total Anggota</p>
        <strong><?php echo $totalMembers; ?></strong>
    </div>
    <div class="stat-box">
        <i class="fas fa-box"></i>
        <p>Total Produk</p>
        <strong><?php echo $totalProducts; ?></strong>
    </div>
    <div class="stat-box confirmed">
        <i class="fas fa-check-circle"></i>
        <p>Barang Dikonfirmasi</p>
        <strong><?php echo $totalConfirmed; ?></strong>
    </div>
    <div class="stat-box cart">
        <i class="fas fa-shopping-cart"></i>
        <p>Dalam Keranjang</p>
        <strong><?php echo $totalCart; ?></strong>
    </div>
    <div class="stat-box pending">
        <i class="fas fa-hourglass-half"></i>
        <p>Total Keseluruhan</p>
        <strong>Rp <?php echo number_format($totalUnconfirmedPrice, 0, ',', '.'); ?></strong>
    </div>
    <div class="stat-box revenue">
        <i class="fas fa-money-bill-wave"></i>
        <p>Harga Dikonfirmasi</p>
        <strong>Rp <?php echo number_format($totalConfirmedPrice, 0, ',', '.'); ?></strong>
    </div>
</div>

    </div>

    <div id="members" class="page hidden">
    <h2>Daftar Anggota</h2>
    <table>
        <tr><th>ID</th><th>Nama</th><th>Email</th><th>Contact</th><th>Aksi</th></tr>
        <?php 
        $users = $conn->query("SELECT * FROM users");
        while ($u = $users->fetch_assoc()) { 
            echo "<tr>
                    <td>{$u['id']}</td>
                    <td>{$u['name']}</td>
                    <td>{$u['email']}</td>
                    <td>{$u['contact']}</td>
                    <td><a href='delete.php?type=member&id={$u['id']}' onclick='return confirm(\"Yakin ingin menghapus?\")'>🗑 Hapus</a></td>
                  </tr>";
        }
        ?>
    </table>
</div>


    <div id="add_member" class="page hidden">
        <h2>Tambah Anggota</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="number" name="contact" placeholder="Contact" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="role" placeholder="Role" required>
            <button type="submit" name="add_member">Tambah</button>
        </form>
    </div>

    <div id="products" class="page hidden">
    <h2>Daftar Produk</h2>
    <table>
        <tr><th>ID</th><th>Nama</th><th>Harga</th><th>Aksi</th></tr>
        <?php 
        $products = $conn->query("SELECT * FROM items");
        while ($p = $products->fetch_assoc()) { 
            echo "<tr>
                    <td>{$p['id']}</td>
                    <td>{$p['name']}</td>
                    <td>Rp " . number_format($p['price'], 0, ',', '.') . "</td>
                    <td><a href='delete.php?type=product&id={$p['id']}' onclick='return confirm(\"Yakin ingin menghapus?\")'>🗑 Hapus</a></td>
                  </tr>";
        }
        ?>
    </table>
</div>


    <div id="add_product" class="page hidden">
        <h2>Tambah Produk</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Nama Produk" required>
            <input type="number" name="price" placeholder="Harga" required>
            <button type="submit" name="add_product">Tambah</button>
        </form>
    </div>

    <div id="order" class="page hidden">
    <h2>Daftar Pesanan</h2>
    <table>
        <tr><th>ID</th><th>User</th><th>Produk</th><th>Harga</th><th>Status</th><th>Aksi</th></tr>
        <?php 
        $query = "SELECT users_items.id, users.name AS user_name, items.name AS product_name, items.price, users_items.status 
                  FROM users_items 
                  JOIN users ON users_items.user_id = users.id 
                  JOIN items ON users_items.item_id = items.id";
        $orders = $conn->query($query);
        while ($order = $orders->fetch_assoc()) { 
            echo "<tr>
                    <td>{$order['id']}</td>
                    <td>{$order['user_name']}</td>
                    <td>{$order['product_name']}</td>
                    <td>Rp " . number_format($order['price'], 0, ',', '.') . "</td>
                    <td>{$order['status']}</td>
                    <td><a href='delete.php?type=order&id={$order['id']}' onclick='return confirm(\"Yakin ingin menghapus pesanan ini?\")'>🗑 Hapus</a></td>
                  </tr>";
        }
        ?>
    </table>
</div>



</div>

<script>
    function showContent(page) { document.querySelectorAll('.page').forEach(p => p.classList.add('hidden')); document.getElementById(page).classList.remove('hidden'); }
</script>

</body>
</html>
