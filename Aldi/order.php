<?php
// Mengambil data dari form
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$quantity = $_POST['quantity'];
$payment_option = $_POST['payment_option'];

// Menghitung total harga
$total_price = $item_price * $quantity;

// Menampilkan hasil
echo "<h1>Pesanan Anda</h1>";
echo "<p>Menu: $item_name</p>";
echo "<p>Harga per item: Rp " . number_format($item_price, 0, ',', '.') . "</p>";
echo "<p>Jumlah: $quantity</p>";
echo "<p>Total Tagihan: Rp " . number_format($total_price, 0, ',', '.') . "</p>";
echo "<p>Opsi Pembayaran: " . ($payment_option == 'pay_later' ? 'Bayar Nanti (Check-out)' : 'Bayar Sekarang') . "</p>";
?>
