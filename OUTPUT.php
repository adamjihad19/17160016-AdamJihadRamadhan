<?php 
    $barang = 100000;
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UTS</title>
  </head>
  <body>
    
   <div class="container">
   <div class="row">
   <div class="col-md-6 offset-md-3 mt-4">
   <div class="card bg-light mb-3" style="max-width: 200%;">
   <div class="card-header"><b>UTS </b></div>
   <div class="card-body">
   <h4 class="card-title">LAPORAN PEMBELIAN BARANG</h4>
   <table class="table">
   <thead>
   <tr>
            <th scope="col">#</th>
            <th scope="col">NAMA BARANG</th>
            <th scope="col">HARGA</th>
            <th scope="col">JUMLAH BELI</th>
            <th scope="col">JENIS BAYAR</th>
            <th scope="col">JAMINAN</th>
            <th scope="col">JENIS MEMBER</th>
            <th scope="col">DISKON</th>
            <th scope="col">TOTAL BAYAR</th>
            </tr>
    </thead>
    <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $_POST['nambar'];?></td>
            <td><?php echo $barang?></td>
            <td><?php echo $_POST['jl']?></td>
            <td><?php echo $_POST['jb']?></td>
            <td><?php echo $_POST['ck1']?></td>
            <td><?php echo $_POST['ck2']?></td>
            <td><?php echo $_POST['diskon']?></td>
            <td><?php echo $barang ?></td>
           </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
        <a class="navbar-brand" href="#">STMIK ANTAR BANGSA</a>
        </div>
        </nav>
 
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>