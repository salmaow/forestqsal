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
            <form action="penangananprocess_add.php" method="POST">
                <label for="idpenanganan">ID</label>
                <input type="text" name="idpenanganan" id="idpenanganan" required>

                <label for="idlaporan">ID Laporan</label>
                <input type="text" name="idlaporan" id="idlaporan" required>

                <label for="rindaka">Tindakan</label>
                <input type="text" name="tindakan" id="tindakan" required>

                <label for="status">Status</label>
                <input type="text" name="status" id="status" required>

                <button type="submit">Add</button>
            </form>
        </section>

        <section class="view-section">
            <?php
            include 'connect.php';
            
            $sql = "SELECT * FROM penanganan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table border='1' class='view-form'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Laporan</th>
                        <th>Tindakan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['idpenanganan'] . "</td>
                    <td>" . $row['idlaporan'] . "</td>
                    <td>" . $row['tindakan'] . "</td>
                    <td>" . $row['status'] . "</td>
                    <td>
                        <a href='penanganan_update.php?id=" . $row['idpenanganan'] . "'>Update</a> |
                        <a href='penanganan_delete.php?id=" . $row['idpenanganan'] . "'>Delete</a>
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