<?php 
include("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .font{
            font-family: fantasy;
        }
        .bt-green{
            border-top:8px #2416BF solid ;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #2416BF;">
  <div class="container-fluid">
    <a class="navbar-brand link-light font" href="#">Laundry</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link link-light font" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light font" href="login.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- banner -->
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide my-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slide.png" class="d-block w-100 p-1 rounded border border-warning border-5" alt="...">
            </div>  
        </div>
    </div>
</div>
<!-- card -->
<div class="container my-2 mb-5">
    <div class="row justify-content-center g-2">
    <?php $id=0; ?>
        <?php 
        foreach($paket as $p){
        ?>
        
        <div class="col-3">
            <div class="card text-center bt-green" style="width: 16rem;" >
            <img src="<?php echo $p['img']; ?>" class="card-img-top img-fluid" alt="foto produk">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $p["name"]; ?></h5>
                    <p class="card-text"><?php echo $p["desc_produk"]; ?></p>
                    <p class="card-text"><?php echo $p["harga"]; ?></p>
                    <a href="<?php echo 'transaksi.php?id='.$id++ ?>" class="btn btn-outline-warning">Pilih Produk</a>
                </div>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>
</div>

<!-- footer -->
<div class="container-fluid mt-2" style="background-color: #2416BF;">
    <div class="text-center pt-2">
        <p class="text-light font">Created By Mnfds</p>
    </div>
</div>
</body>
</html>
