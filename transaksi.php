<?php
$id = $_GET['id'];
include("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
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
        .bg-blue{
            background-color: #2416BF;
        }
        .text-blue{
            color: #2416BF;
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

<!-- main -->
<div class="container mt-5">
    <div class="row justify-content-center pt-3 ">
        <form action="" method="POST">
            <div class="bg-blue row rounded justify-content-center py-3">
                    <div class="col-10 p-3">
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light">No Transaksi</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="no_transaksi" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light">Tanggal Transaksi</label>
                                </div>
                                <div class="col-8">
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light">Nama Customer</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="cust" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light">Pilihan Produk</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="paket" class="form-control" value="<?php echo $paket[$id]["name"]; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light"> Harga Produk</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="harga" class="form-control" value="<?php echo $paket[$id]["harga"]; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light"> Jumlah Produk</label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="jumlah" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="form1" class="btn btn-outline-light col-12">hitung total harga</button>
                    </div>
            </div>
        </form>
    </div>

    <?php 
    if(isset($_POST['form1'])){
        $input1 = intval($_POST['harga']);
        $harga = $input1;
        $input2 = intval($_POST['jumlah']);
        $jumlah = $input2;
        @$total = $harga * $jumlah;
    }
    ?>

    <div class="row justify-content-center mt-4">
        <div class="col-6">
            <form action="" method="POST">
                <div class="col-12 my-2">
                    <div class="row justify-content-start my-2">
                        <div class="col-3">
                            <label class="font text-blue">Total Harga :</label>
                        </div>
                        <div class="col-8">
                            
                            <input type="text" class="form-control" value="<?php echo @$total ?>" name="total_harga">
                        </div>
                    </div>
                    <div class="row justify-content-start my-2">
                        <div class="col-3">
                            <label class="font text-blue">Pembayaran :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="pembayaran">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-warning" name="kembalian">Hitung Kembalian</button>
                    </div>
                </div>
            </form>
        </div>

        <?php 
            if(isset($_POST['kembalian'])){
                $bayar = intval($_POST['pembayaran']);
                $total_pembayaran = intval($_POST['total_harga']);
                @$kembalian = $bayar - $total_pembayaran;
            }
        ?>
        <div class="col-6">
            <form action="">
                <div class="col-12 my-2">
                    <div class="row justify-content-end my-2">
                        <div class="col-3">
                            <label class="font text-blue">Kembalian :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" value="<?php echo @$kembalian ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row justify-content-end">

                        <a class="btn btn-outline-warning col-4" onclick="siu()" role="button">simpan transaksi</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- footer -->
<div class="container-fluid mt-2" style="background-color: #2416BF;">
    <div class="text-center pt-2">
        <p class="text-light font">Created By Mnfds</p>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function siu(){
        Swal.fire({
        title: 'Berhasil',
        text: "Proses Transaksi Telah Berhasil, Klik yes Untuk Kembali",
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location= 'dashboard.php'
        }
        })
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>