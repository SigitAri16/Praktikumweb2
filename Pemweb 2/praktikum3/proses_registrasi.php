<?php
// Fungsi untuk menghitung total skor berdasarkan pilihan skill
function skor_skill($skills) {
    $skor_skill = [
        "HTML" => 10,
        "CSS" => 10,
        "JavaScript" => 20,
        "RWD Bootstrap" => 20,
        "PHP" => 30,
        "Python" => 30,
        "Java" => 50
    ];

    $total_skor = 0;

    if (!empty($skills)) {
        foreach ($skills as $skill) {
            if (array_key_exists($skill, $skor_skill)) {
                $total_skor += $skor_skill[$skill];
            }
        }
    }

    return $total_skor;
}

// Fungsi untuk menentukan kategori skill berdasarkan total skor
function kategori_skill($total_skor) {
    if ($total_skor == 0) {
        return "Tidak Memadai";
    } elseif ($total_skor <= 40) {
        return "Kurang";
    } elseif ($total_skor <= 60) {
        return "Cukup";
    } elseif ($total_skor <= 100) {
        return "Baik";
    } elseif ($total_skor <= 150) {
        return "Sangat Baik";
    } elseif ($total_skor <= 180) {
        return "Lo sepuh bang";
    }
}

// Memproses data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $program_studi = $_POST["program_studi"];
    $domisili = $_POST["domisili"];
    $skills = isset($_POST["skills"]) ? $_POST["skills"] : [];

    // Menghitung total skor skill
    $total_skor = skor_skill($skills);

    // Menampilkan hasil registrasi dengan desain UI
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 15px 15px 0 0;
        }
        .card-body {
            background-color: #fff;
            border-radius: 0 0 15px 15px;
        }
        .result-item {
            margin-bottom: 10px;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Hasil Registrasi</h2>
            </div>
            <div class="card-body">
                <div class="result-item">
                    <strong>NIM:</strong> <?php echo $nim; ?>
                </div>
                <div class="result-item">
                    <strong>Nama:</strong> <?php echo $nama; ?>
                </div>
                <div class="result-item">
                    <strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?>
                </div>
                <div class="result-item">
                    <strong>Program Studi:</strong> <?php echo $program_studi; ?>
                </div>
                <div class="result-item">
                    <strong>Skill:</strong> <?php echo implode(", ", $skills); ?>
                </div>
                <div class="result-item">
                    <strong>Total Skor Skill:</strong> <?php echo $total_skor; ?>
                </div>
                <div class="result-item">
                    <strong>Kategori Skill:</strong> <?php echo kategori_skill($total_skor); ?>
                </div>
                <div class="result-item">
                    <strong>Domisili:</strong> <?php echo $domisili; ?>
                </div>
                <div class="result-item">
                    <strong>Email:</strong> <?php echo $email; ?>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}
?>
