<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu PeseninKuy</title>
    <style>
        .container {
            width: 80%;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .menu-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .menu-item h3 {
            color: #2c3e50;
        }
        .menu-item p {
            font-size: 16px;
            color: #7f8c8d;
        }
        .order-btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        .order-btn:hover {
            background-color: #2980b9;
        }
        .quantity-input {
            width: 50px;
            padding: 5px;
            text-align: center;
            margin-bottom: 10px;
        }
        .payment-option {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Selamat Datang di PeseninKuy!</h1>
    <p>Silakan pilih menu yang ingin Anda pesan:</p>

    <form method="POST">
        <label for="guest_id">Masukkan ID Tamu: </label>
        <input type="text" name="guest_id" required>
        <button type="submit" class="order-btn">Verifikasi ID</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <p>Opsi Pembayaran:</p>
        <div class="payment-option">
            <?php if ($payment_option == 'pay_later'): ?>
                <p>Bayar Nanti (Check-out)</p>
            <?php else: ?>
                <p>Bayar Sekarang</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="menu">
        <?php foreach ($menuItems as $item): ?>
            <div class="menu-item">
                <h3><?php echo $item['name']; ?></h3>
                <p>Harga: Rp <?php echo number_format($item['price'], 0, ',', '.'); ?></p>
                <form action="order.php" method="POST">
                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                    <input type="hidden" name="item_name" value="<?php echo $item['name']; ?>">
                    <input type="hidden" name="item_price" value="<?php echo $item['price']; ?>">
                    
                    <!-- Menambahkan input jumlah pesanan -->
                    <label for="quantity">Jumlah: </label>
                    <input type="number" name="quantity" class="quantity-input" value="1" min="1" required>
                    
                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment_option" value="pay_now" <?php echo ($payment_option == 'pay_now') ? 'checked' : ''; ?>> Bayar Sekarang
                        </label>
                        <br>
                        <?php if ($payment_option == 'pay_later'): ?>
                            <label>
                                <input type="radio" name="payment_option" value="pay_later" checked> Bayar Nanti (Check-out)
                            </label>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="order-btn">Pesan</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
