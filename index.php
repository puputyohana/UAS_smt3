<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login MultiUser-Penggajian</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>


    <form method ="post" action="cek_login.php" class="form-signin">
          <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">LOGIN USER</h1>
            <p>Masukkan Username dan Password Anda dengan Benar!</p>
          </div>

          <div class="form-label-group">
            <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" required autofocus>
            <label>Username</label>
          </div>

          <div class="form-label-group">
            <input type="password" class="form-control" name = "password" placeholder="Masukkan Password Anda" required>
            <label>Password</label>
          </div>

          <div class="form-label-group">
            <select class="form-control" name="level">
              <option value="pegawai">Pegawai</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted text-center">&copy; Puput Yohana Jan 2021 - <?= date('M Y') ?> </p>
</form>


</body>
</html>
