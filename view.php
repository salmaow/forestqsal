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
        <section class="view-section">
            <h3>Detail Laporan</h3>
            <?php
            include 'connect.php';
            
            $sql = "SELECT * FROM detail_view";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>
                    <tr>
                        <th>Tanggal Laporan</th>
                        <th>Lokasi</th>
                        <th>Tindakan</th>
                        <th>Status</th>
                    </tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['tgllaporan'] . "</td>
                    <td>" . $row['lokasi'] . "</td>
                    <td>" . $row['tindakan'] . "</td>
                    <td>" . $row['status'] . "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No results found</p>";
            }

            $conn->close();
            ?> <br>
        </section>
    </main>
  </body>
</html>