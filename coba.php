<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<?php
$nama = $alamat = $telepon = $jenis kelamin = "";
$nama = $alamat = $telepon = $jenis kelamin = $agama = $keanehan pada diri anda = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
    {
      $name = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["alamat"])) 
  {
    $alamat = "alamat is required";
  } else {
    $alamat = test_input($_POST["alamat"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $alamat = "Invalid alamat format"; 
    }
  }
  if (empty($_POST["telepon"])) 
  {
    $telepon = "";
  } else {
    $telepon = test_input($_POST["telepon"]);
    if (!preg_match($telepon)) {
      $telepon = "Invalid telepon"; 
    }
  }

  if (empty($_POST["agama"])) {
    $agama = "";
  } else {
    $agama = test_input($_POST["agama"]);
  }

  if (empty($_POST["jenis kelamin"])) {
    $jenis kelamin = "jenis kelamin is required";
  } else {
    $jenis kelamin = test_input($_POST["jenis kelamin"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nama: <input type="text" name="nama" value="<?php echo $nama;?>">
  <span class="error">*
  <?php echo $nama;?></span>
  <br><br>
  alamat: <input type="text" name="alamat" value="<?php echo $alamat;?>">
  <span class="error">*
  <?php echo $email;?></span>
  <br><br>
  telepon: <input type="text" name="telepon" value="<?php echo $telepon;?>">
  <span class="error"><?php echo $telepon;?></span>
  <br><br>
  agama: <textarea name="agama" rows="5" cols="40">
  <?php echo $agama;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="jenis kelamin" <?php if (isset($jenis kelamin) && $jenis kelamin=="female") echo "checked";?> value="female">Female
  <input type="radio" name="jenis kelamin" <?php if (isset($jenis kelamin) && $jenis kelamin=="male") echo "checked";?> value="male">Male
  <span class="error">*
  <?php echo $jenis kelamin;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nama;
echo "<br>";
echo $alamat;
echo "<br>";
echo $telepon;
echo "<br>";
echo $agama;
echo "<br>";
echo $jenis kelamin;
?>
</body>
</html>
Maaf kalau salah saya kurang memahami materi tentang handling dan validasi form sudah melihat youtube selama 3-5 kali masih belum paham 
maaf jika ada kesalahan
