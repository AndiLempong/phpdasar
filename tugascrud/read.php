<?php include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<style>
body {
    background-image: url('https://www.just-drinks.com/wp-content/uploads/sites/29/2022/08/Tequila.png')
}
</style>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Read Drink</h3>
        <table class="table table-striped">
  <thead>
      <th scope="col">Nama Minuman</th>
      <th scope="col">Rasa Minuman</th>
      <th scope="col">Harga Minuman</th>
      <th scope="col">Merek Minuman</th>
      <th scope="col">Rating Minuman</th>
    </tr>
  </thead>
<tbody class="table-group-divider">
    <?php
    $sql = "select * from customer";
    $result = mysqli_query($conn, $sql);
    if($result) {
        while($data = mysqli_fetch_assoc($result)){
            $id = $data['id'];
            $nama_minuman = $data['nama_minuman'];
            $rasa_minuman = $data['rasa_minuman'];
            $harga_minuman = $data['harga_minuman'];
            $merek_minuman = $data['merek_minuman'];
            $rating_minuman = $data['rating_minuman'];
            echo '
            <tr>
            <td>'.$nama_minuman.'</td>
            <td>'.$rasa_minuman.'</td>
            <td>'.$harga_minuman.'</td>
            <td>'.$merek_minuman.'</td>
            <td>'.$rating_minuman.'</td>
            <td class="text-center">
            <a href="update.php?id='.$id.'" class="btn btn-sm btn-primary">Update</a>
            <button onClick="hapus('.$id.')" class="btn btn-sm btn-danger">Delete</button>
            </td>
            </tr>';
        }
    }
    ?>
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