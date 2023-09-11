<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Data Guru</h3>
        <table class="table table-striped">
  <thead>
      <th scope="col">No</th>
      <th scope="col">Nama Guru</th>
      <th scope="col">NIK</th>
      <th scope="col">Gender</th>
      <th scope="col">Wali Kelas</th>
      <th scope="col">Guru Mapel</th>
    </tr>
  </thead>
<tbody class="table-group-divider">
    <?php
    $sql = "select * from guru INNER JOIN mapel ON guru.id_mapel = mapel.id INNER JOIN kelas ON kelas.id_guru_walikelas = guru.id ";
    $result = mysqli_query($conn, $sql);
    $no = 1;
    foreach ($result as $row) :
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_guru'];?></td>
                <td><?= $row['nik'];?></td>
                <td><?= $row['gender'];?></td>
                <td><?= $row['jurusan_kelas'].' '.$row['tingkat_kelas']; ?></td>
                <td><?= $row['guru_mapel']; ?></td>
                <td class="text-center"></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <script>
        function hapus(id) {
            var yes = confirm('Benarkah Demikian?');
            if (yes == true) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</body>
</html>