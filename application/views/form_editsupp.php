<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Supplier</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        
    </head>
    <style>
input[type=text], select {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit], button {
  width: 60%;
  background-color: #0000FF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 15px;
}

input[type=submit]:hover ,button:hover {
  background-color: #0080FF;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-top:50px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}
th{
    background-color: #0066CC;
}


</style>
    <body>

<div class="wrapper">
    <div class="header">
        <div class="header-menu">
            <div class="title">Cas<span>APP</span></div>
            <div class="sidebar-btn">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li><a href="#"><i class="fas fa-user-alt"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="sidebar">
        <div class="sidebar-menu">
            <li class="item">
                <a href="#" class="menu-btn">
                    <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="item">
                <a href="<?php echo site_url();?>Dashboard/kelolasupp" class="menu-btn">
                    <i class="fas fa-user-tag"></i><span>Supplier</span>
                </a>
            </li>
            <li class="item" id="barang">
                <a href="#barang" class="menu-btn">
                    <i class="fas fa-boxes"></i><span>Barang<i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                    <a href="<?php echo site_url();?>Dashboard/databarang"><i class="fas fa-box"></i><span>Data Barang</span></a>
                    <a href="<?php echo site_url();?>Dashboard/stok"><i class="fas fa-box"></i><span>Stok Barang</span></a>
                    <a href="#"><i class="fas fa-box"></i><span>Stok Masuk</span></a>
                </div>
            </li>
            <li class="item">
                <a href="#" class="menu-btn">
                    <i class="fas fa-cash-register"></i><span>Kasir</span>
                </a>
            </li>
            <li class="item" id="laporan">
                <a href="#laporan" class="menu-btn">
                    <i class="fas fa-file-alt"></i><span>Laporan <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                    <a href="#"><i class="far fa-file-alt"></i><span>Laporan Penjualan</span></a>
                    <a href="#"><i class="far fa-file-alt"></i><span>Laporan Stok Barang</span></a>
                    <a href="#"><i class="far fa-file-alt"></i><span>Laporan Keuangan</span></a>
                    <a href="#"><i class="far fa-file-alt"></i><span>Laporan Pembelian</span></a>
                </div>
            </li>
            <li class="item">
                <a href="#" class="menu-btn">
                    <i class="fas fa-user-alt"></i><span>Pengguna</span>
                </a>
            </li>
        </div>
    </div>
    <div class= "container">
                <center><div class="main-container">
                   <div class="header-menu">
                       <h1>Edit Supplier</h1><br><br>
                    </div>
                    <div class="card-body">
                <form action="<?= base_url() ?>Dashboard/ubahSupp" method="post">
                <input type="hidden" name="kode_supplier" value="<?= $user['kode_supplier'] ?>">
                    <div class="form-group">
                        <input type="text" name="nama_supplier" class="form-control" value="<?= $user['nama_supplier'] ?>"  placeholder="nama supplier">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nohp_supplier" class="form-control" value="<?= $user['nohp_supplier'] ?>"  placeholder="no. hp supplier">
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat_supplier" class="form-control" value="<?= $user['alamat_supplier'] ?>"  placeholder="alamat supplier">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
                    
                </div></center>

                
            </div>  
        
    </div>  

</div>

<script type="text/javascript">
$(document).ready(function(){
    $(".sidebar-btn").click(function(){
        $(".wrapper").toggleClass("collapse");
    });
});
</script>

</body>
</html>
