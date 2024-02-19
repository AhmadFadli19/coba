<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark-subtle">

<nav class="navbar navbar-expand-lg bg-info mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="../coba1.php">BERANDA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-4 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">DEKSRIPSI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../REGISTER/register.php">REGISTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Login/index.php">LOGIN</a>   
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GALERI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">ALBUM FOTO</a></li>
                  <li><a class="dropdown-item" href="#">ALBUM VIDEO</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">SESUATU MUNGKIN DISINI</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">HAFIZH AL FATIH</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit"><a href="Logout/logout.php" style="text-decoration:none; color:white;">LOGOUT</a> </button>
            </form>
          </div>
        </div>
      </nav>


      <div class="container">
         <div class="row justify-content-center">
         <div class="card border-1 border-black shadow-lg" style="width:35rem;">
           <div class="card-body">
             <h2 class="text-center mb-5 mt-4">Logout</h2>
              <h6 class="card-subtitle mb-2 text-body-secondary">Selamat Anda Telah Berhasil Logout</h6>
              <p class="card-text">Silahkan Pencet Salah satu Dari 2 Link Ini Untuk Membuat Akun Baru Atau Login.</p>
              <a href="../REGISTER/register.php" class="card-link">REGISTER</a>
              <a href="../Login/index.php" class="card-link">LOGIN</a>
          </div>
       </div>
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      
</body>
</html>