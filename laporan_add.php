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
            <form action="laporanprocess_add.php" method="POST">
                <label for="idlaporan">ID</label>
                <input type="text" name="idlaporan" id="idlaporan" required>

                <label for="tgllaporan">Tanggal Laporan</label>
                <input type="date" name="tgllaporan" id="tgllaporan" required>

                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" required>

                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" required>

                <button type="submit">Add</button>
            </form>
        </section>

        <section class="view-section">
            <?php
            include 'connect.php';
            
            $sql = "SELECT * FROM laporan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table border='1' class='view-form'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Laporan</th>
                        <th>Lokasi</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['idlaporan'] . "</td>
                    <td>" . $row['tgllaporan'] . "</td>
                    <td>" . $row['lokasi'] . "</td>
                    <td>" . $row['deskripsi'] . "</td>
                    <td>
                        <a href='laporan_update.php?id=" . $row['idlaporan'] . "'>Update</a> |
                        <a href='laporan_delete.php?id=" . $row['idlaporan'] . "'>Delete</a>
                    </td>
                    </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p>No results found</p>";
            }

            $conn->close();
            ?>
        </section>
    </main>
  </body>
</html>