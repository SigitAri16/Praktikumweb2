<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Daftar Buah</h2>

<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Buah</th>
        <th>Harga</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Data buah
    $buah = array(
        array("Apel", 5000),
        array("Jeruk", 4000),
        array("Mangga", 6000),
        array("Anggur", 8000),
        array("Pisang", 3000)
    );

    // Menampilkan data buah ke dalam tabel
    foreach ($buah as $key => $item) {
        echo "<tr>";
        echo "<td>" . ($key + 1) . "</td>"; // Nomor urut
        echo "<td>" . $item[0] . "</td>"; // Nama buah
        echo "<td>Rp " . number_format($item[1], 0, ',', '.') . "</td>"; // Harga
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

</body>
</html>
