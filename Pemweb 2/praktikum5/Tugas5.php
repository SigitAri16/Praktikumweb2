<?php

class BMI {
    public function hitungBMI($berat, $tinggi) {
        // Konversi tinggi dari cm ke m
        $tinggi = $tinggi / 100;

        // Hitung BMI
        $bmi = $berat / ($tinggi ** 2);

        return $bmi;
    }

    public function statusBMI($bmi) {
        // Tentukan status BMI
        if ($bmi < 18.5) {
            return "Kurus";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            return "Normal (Ideal)";
        } elseif ($bmi >= 24.9 && $bmi < 29.9) {
            return "Obesitas";
        } 
    }
}

// Inisialisasi array data
$data = [];

// Proses form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $berat = $_POST["berat"];
    $tinggi = $_POST["tinggi"];
    $umur = $_POST["umur"];
    $jk = $_POST["jk"];

    // Buat instance dari kelas BMI
    $bmiCalculator = new BMI();

    // Hitung BMI
    $bmi = $bmiCalculator->hitungBMI($berat, $tinggi);

    // Tentukan status BMI
    $status = $bmiCalculator->statusBMI($bmi);

    // Tambahkan data ke array
    $data = [
        "nama" => $nama,
        "gender" => $jk,
        "umur" => $umur,
        "bb" => $berat,
        "tb" => $tinggi,
        "bmi" => number_format($bmi, 1),
        "ket" => $status
    ];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .result-container {
            margin-top: 30px;
        }
        .result-table th, .result-table td {
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-4">BMI Calculator</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="berat">Berat Badan (kg)</label>
                    <input type="number" name="berat" id="berat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tinggi">Tinggi Badan (cm)</label>
                    <input type="number" name="tinggi" id="tinggi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" id="umur" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" name="jk" id="jk" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Hitung BMI</button>
            </form>
        </div>

        <?php if (!empty($data)): ?>
        <div class="col-md-6">
            <div class="result-container">
                <h2 class="mt-5">Hasil BMI</h2>
                <table class="table result-table">
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Berat Badan (kg)</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>BMI</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['gender']; ?></td>
                        <td><?php echo $data['umur']; ?></td>
                        <td><?php echo $data['bb']; ?></td>
                        <td><?php echo $data['tb']; ?></td>
                        <td><?php echo $data['bmi']; ?></td>
                        <td><?php echo $data['ket']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>


</body>
</html>


<br>
<br>
<br>
<?php
$array = [
    [
        "nama" => "Rosalie Naurah",
        "gender" => "Perempuan",
        "umur" => 20,
        "bb" => 46,
        "tb" => 155,
        "bmi" => "18.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Rara Wulan",
        "gender" => "Perempuan",
        "umur" => 21,
        "bb" => 50,
        "tb" => 160,
        "bmi" => "19.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Giagah Putih",
        "gender" => "Laki-laki",
        "umur" => 22,
        "bb" => 60,
        "tb" => 165,
        "bmi" => "21.8",
        "ket" => "Normal (ideal)"
    ]
];
?>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Berat Badan (kg)</th>
        <th>Tinggi Badan (cm)</th>
        <th>Indeks Massa Tubuh (BMI)</th>
        <th>Keterangan</th>
    </tr>
    <?php foreach ($array as $person): ?>
        <tr>
            <td><?php echo $person["nama"]; ?></td>
            <td><?php echo $person["gender"]; ?></td>
            <td><?php echo $person["umur"]; ?></td>
            <td><?php echo $person["bb"]; ?></td>
            <td><?php echo $person["tb"]; ?></td>
            <td><?php echo $person["bmi"]; ?></td>
            <td><?php echo $person["ket"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
