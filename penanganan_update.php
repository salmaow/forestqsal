<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM penanganan WHERE idpenanganan='$id'";
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
            <h3>Data Penanganan</h3>
            <form action="penangananprocess_update.php" method="POST">
                <input type="hidden" name="idpenanganan" id="idpenanganan" value="<?php echo $row['idpenanganan']; ?>" required>

                <label for="idlaporan">ID Laporan</label>
                <input type="text" name="idlaporan" id="idlaporan" value="<?php echo $row['idlaporan']; ?>" required>

                <label for="tindakan">Tindakan</label>
                <input type="text" name="tindakan" id="tindakan" value="<?php echo $row['tindakan']; ?>" required>

                <label for="status">Status</label>
                <input type="text" name="status" id="status" value="<?php echo $row['status']; ?>" required>

                <div class="buttons">
                    <button type="submit">Update</button>
                    <button type="button" onclick="window.location.href='penanganan_add.php'">Back</button>
                </div>
            </form>
        </section>
    </main>
  </body>
</html>