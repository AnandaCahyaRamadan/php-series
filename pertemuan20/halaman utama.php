<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        
    .styled-table {
        border-collapse: collapse;
        font-size: 0.9em;
        font-family: sans-serif;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
     }
     .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }
    </style>
</head>
<body class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <img src="" alt="" class="rounded-circle" width="3%">
                <a class="navbar-brand ms-3" href="#" style="color:white"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <form action="create.php">
                    <button type="submit" class="btn btn-outline-warning" >Tambah</button>
                    </form>
                    </li>
                    <li class="nav-item">
                    <form action="logout.php">
                    <button type="submit" class="btn btn-outline-danger ms-2" >Logout</button>
                    </form>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        <table class="styled-table table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 include 'koneksi.php';
                 session_start();

                 // Pengecekan sesi
                 if (!isset($_SESSION['isLoggedIn'])) {
                     header("Location: index.php");
                     exit();
                 }
                // Query untuk membaca data dari tabel
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                
                // Memeriksa apakah ada data yang ditemukan
                if ($result->num_rows > 0) {
                    // Menampilkan data
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td scope='row' style='color:white'>" . $row["id"] . "</td>";
                        echo "<td>";
                        echo "<div class='btn-group' role='group' aria-label='Basic mixed styles example'>";
                        echo "<a class='btn btn-primary' href='detail.php?id=" . $row["id"] . "'>Detail</a> ";
                        echo "<a class='btn btn-warning' href='edit.php?id=" . $row["id"] . "'>Edit</a> ";
                        echo "<a class='btn btn-danger' href='delete.php?id=" . $row["id"] . "'>Hapus</a>";
                        echo "</div>";
                        echo "</td>";
                        echo "<td><img src=\"avatar/{$row['avatar']}\" width='100em' class='rounded-circle'></td>";
                        echo "<td style='color:white'>" . $row["name"] . "</td>";
                        echo "<td style='color:white'>" . $row["email"] . "</td>";
                        echo "<td style='color:white'>" . $row["phone"] . "</td>";
                        echo "<td style='color:white'>" . $row["role"] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
