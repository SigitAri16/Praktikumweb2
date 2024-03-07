<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Belanja</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Form Belanja</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="customer">Customer:</label>
            <input type="text" class="form-control" id="customer" placeholder="Masukkan nama customer" name="customer">
        </div>
        <div class="form-group">
            <label>Pilih Produk:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="produk" id="produk1" value="Produk 1">
                <label class="form-check-label" for="produk1">
                    Kemeja - Rp. 50.000
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="produk" id="produk2" value="Produk 2">
                <label class="form-check-label" for="produk2">
                    PS 5 - Rp. 5.000.000
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="produk" id="produk3" value="Produk 3">
                <label class="form-check-label" for="produk3">
                    Iphone 12 - Rp. 10.000.000
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Beli:</label>
            <input type="number" class="form-control" id="jumlah" placeholder="Masukkan jumlah barang" name="jumlah">
        </div>
        <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $harga_produk = 0;
        
        if($produk === "Produk 1") {
            $harga_produk = 50000;
        } elseif($produk === "Produk 2") {
            $harga_produk = 5000000;
        } elseif($produk === "Produk 3") {
            $harga_produk = 10000000;
        }
        
        $total_harga_produk = $jumlah * $harga_produk;
        
        if (!isset($_SESSION['total_pembelian'])) {
            $_SESSION['total_pembelian'] = 0;
        }
        
        if (!isset($_SESSION['total_harga'])) {
            $_SESSION['total_harga'] = 0;
        }
        
        $_SESSION['total_pembelian'] += $jumlah;
        $_SESSION['total_harga'] += $total_harga_produk;
        
        echo "<h3>Hasil Pembelian:</h3>";
        echo "<p>Nama Customer: $customer</p>";
        echo "<p>Produk Pilihan: $produk</p>";
        echo "<p>Jumlah Beli: $jumlah</p>";
        echo "<p>Total Harga Produk: Rp. " . number_format($total_harga_produk, 0, ',', '.') . "</p>";
        echo "<p>Total Pembelian: " . $_SESSION['total_pembelian'] . " barang</p>";
        echo "<p>Total Harga Keseluruhan: Rp. " . number_format($_SESSION['total_harga'], 0, ',', '.') . "</p>";
    }
    ?>
</div>

</body>
</html>
