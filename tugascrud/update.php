<?php
include('connect.php');
$id = $_GET['id'];
$get_data = "SELECT * from admin where id = $id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_minuman = $row['nama_minuman'];
$rasa_minuman = $row['rasa_minuman'];
$harga_minuman = $row['harga_minuman'];
$merek_minuman = $row['merek_minuman'];
$rating_minuman = $row['rating_minuman'];
if (isset($_POST['submit'])) {
    $nama_minuman = $_POST['nama_minuman'];
    $rasa_minuman = $_POST['rasa_minuman'];
    $harga_minuman = $_POST['harga_minuman'];
    $merek_minuman = $_POST['merek_minuman'];
    $rating_minuman = $_POST['rating_minuman'];
    $sql = "update admin set id = $id, nama_minuman = '$nama_minuman', rasa_minuman = '$rasa_minuman', harga_minuman = '$harga_minuman', merek_minuman ='$merek_minuman', rating_minuman = '$rating_minuman ' where id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:read.php');
    } else {
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
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Update</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Minuman</label>
                <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" value="<?php echo $nama_minuman ?>">
            </div>
            <div class="mb-3">
            <label for="rasa" class="form-label">Rasa Minuman</label>
                <input type="text" class="form-control" id="rasa_minuman" name="rasa_minuman" value="<?php echo $rasa_minuman ?>">
            </div>
            <div class="mb-3">
            <label for="harga" class="form-label">Harga Minuman</label>
                <input type="text" class="form-control" id="harga_minuman" name="harga_minuman" value="<?php echo $harga_minuman ?>">
            </div>
            <div class="mb-3">
            <label for="merek" class="form-label">Merek Minuman</label>
                <input type="text" class="form-control" id="merek_minuman" name="merek_minuman" value="<?php echo $merek_minuman ?>">
            </div>
            <div class="mb-3">
            <label for="rating" class="form-label">Rating Minuman</label>
                <input type="text" class="form-control" id="rating_minuman" name="rating_minuman" value="<?php echo $rating_minuman ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Teken</button>
        </form>
    </div>
</body>

</html>