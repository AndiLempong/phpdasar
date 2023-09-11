<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <style>
    body {
      background-image: url('https://media.istockphoto.com/id/1446467491/id/foto/latar-belakang-mosaik-abstrak-poligon-logam-hitam-bentuk-segitiga-wallpaper-metalik-biru-ungu.jpg?s=612x612&w=is&k=20&c=Lyi0clGaaA42BOHiiWgIbNKC_-Vq3gyniMPAfGGjUrI=');
      background-repeat: no-repeat;
      background-size: 100%;
    }

    button {
        background-color: gray;
    }
  </style>
</head>
<form action="connect_login.php" method="post">
<body>
<center>
    <h1>Halaman Login</h1>
        <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">@</span>
  <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" name="email">
</div>
<br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">$</span>
  <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password">
  <br>
  <br>
  <button type="submit">Sign In</button>
    </form>
</div>
</center>
</body>
</html>
