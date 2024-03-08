<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Registrasi </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    background-color: #f8f9fa;
  }
  .form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
  }
</style>
</head>
<body>
<div class="container">
  <div class="form-container">
    <h2 class="text-center mb-4">Form Registrasi IT Club Data Science</h2>
    <form method="POST" action="proses_registrasi.php">
      <div class="form-group row">
        <label for="nim" class="col-sm-4 col-form-label"><i class="fa fa-id-card"></i> Nim</label> 
        <div class="col-sm-8">
          <input id="nim" name="nim" placeholder="Masukan Nim" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-sm-4 col-form-label"><i class="fa fa-user"></i> Nama</label> 
        <div class="col-sm-8">
          <input id="nama" name="nama" placeholder="Masukan nama" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label"><i class="fa fa-envelope"></i> Email</label> 
        <div class="col-sm-8">
          <input id="email" name="email" placeholder="Masukan email" type="email" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <label class="col-sm-4">Jenis Kelamin</label> 
        <div class="col-sm-8">
          <div class="form-check form-check-inline">
            <input name="jenis_kelamin" id="radio_0" type="radio" class="form-check-input" value="Laki-laki" required="required"> 
            <label for="radio_0" class="form-check-label">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input name="jenis_kelamin" id="radio_1" type="radio" class="form-check-input" value="Perempuan" required="required"> 
            <label for="radio_1" class="form-check-label">Perempuan</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="program_studi" class="col-sm-4 col-form-label">Program Studi</label> 
        <div class="col-sm-8">
          <select id="program_studi" name="program_studi" class="custom-select" required="required">
            <?php
            $program_studi_options = [
                "SI" => "Sistem Informasi",
                "TI" => "Teknik Informatika",
                "BD" => "Bisnis Digital"
            ];
            foreach ($program_studi_options as $key => $value) {
                echo "<option value=\"$key\">$value</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4">Skill Web &amp; Programming</label> 
        <div class="col-sm-8">
          <?php
          $skills_options = [
              "HTML" => 10,
              "CSS" => 10,
              "JavaScript" => 20,
              "RWD Bootstrap" => 20,
              "PHP" => 30,
              "Python" => 30,
              "Java" => 50
          ];
          foreach ($skills_options as $key => $value) {
              echo "<div class=\"form-check form-check-inline\">";
              echo "<input name=\"skills[]\" id=\"skill_$key\" type=\"checkbox\" class=\"form-check-input\" value=\"$key\">"; 
              echo "<label for=\"skill_$key\" class=\"form-check-label\">$key</label>";
              echo "</div>";
          }
          ?>
        </div>
      </div>
      <div class="form-group row">
        <label for="domisili" class="col-sm-4 col-form-label">Domisili</label> 
        <div class="col-sm-8">
          <select id="domisili" name="domisili" class="custom-select">
            <?php
            $domisili_options = [
                "Jakarta", "Depok", "Bogor", "Tanggerang", "Bekasi", "Lainnya"
            ];
            foreach ($domisili_options as $value) {
                echo "<option value=\"$value\">$value</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-4 col-sm-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
