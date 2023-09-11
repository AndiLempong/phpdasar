<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $nama_minuman = $_POST['nama'];
    $rasa_minuman = $_POST['rasa'];
    $harga_minuman = $_POST['harga'];
    $merek_minuman = $_POST['merek'];
    $rating_minuman = $_POST['rating'];
    $sql = "insert into customer(nama_minuman, rasa_minuman , harga_minuman , merek_minuman , rating_minuman) values ('$nama_minuman', '$rasa_minuman', '$harga_minuman', '$merek_minuman', '$rating_minuman')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:read.php');
    }else {
        die($conn->connect_error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZxc-Y3dkXgOOgXjGle5DtE60gmW-SfffL2g&usqp=CAU');
        }
    </style>

</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Create Drink</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Minuman</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
            <label for="rasa" class="form-label">Rasa Minuman</label>
                <input type="text" class="form-control" id="rasa" name="rasa">
            </div>
            <div class="mb-3">
            <label for="harga" class="form-label">Harga Minuman</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
            <label for="merek" class="form-label">Merek Minuman</label>
                <input type="text" class="form-control" id="merek" name="merek">
            </div>
            <div class="mb-3">
            <label for="rating" class="form-label">Rating Minuman</label>
                <input type="text" class="form-control" id="rating" name="rating">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Teken</button>
        </form>
    </div>
</body>

</html>
