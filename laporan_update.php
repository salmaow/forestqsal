<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM laporan WHERE idlaporan='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ForestQ</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header>
      <div class="header-image">
        <img src="img/header-img.png" alt="Header Image" />
      </div>
      
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="laporan_add.php">Data Laporan</a></li>
          <li><a href="penanganan_add.php">Data Penanganan</a></li>
          <li><a href="view.php">Detail Laporan</a></li>
          <li><a href="index.html">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main>
        <section class="form-section">
            <h3>Data Laporan</h3>
            <form action="laporanprocess_update.php" method="POST">
                <input type="hidden" name="idlaporan" id="idlaporan" value="<?php echo $row['idlaporan']; ?>">

                <label for="tgllaporan">Tanggal Laporan</label>
                <input type="date" name="tgllaporan" id="tgllaporan" value="<?php echo $row['tgllaporan']; ?>" required>

                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" value="<?php echo $row['lokasi']; ?>" required>

                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" value="<?php echo $row['deskripsi']; ?>" required>

                <div class="buttons">
                    <button type="submit">Update</button>
                    <button type="button" onclick="window.location.href='laporan_add.php'">Back</button>
                </div>
            </form>
        </section>
    </main>
  </body>
</html>