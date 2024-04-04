<!DOCTYPE html>
<html lang="en">
<?php
include_once('include/meta.php');
require_once("dbkoneksi.php");
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('include/header.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('include/sidebar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <title>Dashboard Rumah Sakit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .container {
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
        }
        .card {
            background-color: #f4f4f4;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Dashboard Rumah Sakit</h1>
</div>

<div class="container">
    <div class="card">
        <h2>Data Pasien</h2>
        <p>Jumlah pasien: <strong>100</strong></p>
        <p>Pasien yang dirawat: <strong>50</strong></p>
        <p>Pasien yang sudah pulang: <strong>50</strong></p>
    </div>

    <div class="card">
        <h2>Data Dokter</h2>
        <p>Jumlah dokter: <strong>20</strong></p>
        <p>Dokter jaga: <strong>5</strong></p>
        <p>Dokter spesialis: <strong>15</strong></p>
    </div>

    <div class="card">
        <h2>Informasi Tambahan</h2>
        <p>Bed kosong: <strong>10</strong></p>
        <p>Jumlah ruangan: <strong>30</strong></p>
        <p>Operasi hari ini: <strong>3</strong></p>
    </div>
</div>
                    
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>