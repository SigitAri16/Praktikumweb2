<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Belanja</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .container {
        max-width: 600px;
        margin-top: 50px;
    }
    .result-card {
        border-radius: 15px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        background-color: #f8f9fa;
        padding: 20px;
    }
    .result-header {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border-radius: 10px 10px 0 0;
    }
    .result-content {
        padding: 15px;
    }
    .result-item {
        margin-bottom: 10px;
    }
</style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Form Belanja</h2>
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
                    Kemeja - Rp. 50.000 <br>
                    <img src="download.jpeg" alt="Kemeja" style="width:100px;height:100px;">
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="produk" id="produk2" value="Produk 2">
                <label class="form-check-label" for="produk2">
                    PS 5 - Rp. 5.000.000 <br>
                    <img src="Ps5.jpeg" alt="PS 5" style="width:100px;height:100px;">
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="produk" id="produk3" value="Produk 3">
                <label class="form-check-label" for="produk3">
                    Iphone 12 - Rp. 10.000.000 <br>
                    <img src="ip.jpeg" alt="Iphone 12" style="width:100px;height:100px;">
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
        
        echo "<div class='result-card'>";
        echo "<div class='result-header'><h3>Hasil Pembelian</h3></div>";
        echo "<div class='result-content'>";
        echo "<div class='result-item'><strong>Nama Customer:</strong> $customer</div>";
        echo "<div class='result-item'><strong>Produk Pilihan:</strong> $produk</div>";
        echo "<div class='result-item'><strong>Jumlah Beli:</strong> $jumlah</div>";
        echo "<div class='result-item'><strong>Total Harga Produk:</strong> Rp. " . number_format($total_harga_produk, 0, ',', '.') . "</div>";
        echo "<div class='result-item'><strong>Total Pembelian:</strong> " . $_SESSION['total_pembelian'] . " barang</div>";
        echo "<div class='result-item'><strong>Total Harga Keseluruhan:</strong> Rp. " . number_format($_SESSION['total_harga'], 0, ',', '.') . "</div>";
        echo "</div></div>";
    }
    ?>
</div>

</body>
</html>
