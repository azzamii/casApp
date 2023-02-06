<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Supplier</title>
        <link href="<?php echo base_url().'css/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'css/css/jquery.dataTables.min.css'?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        
    </head>
    <style>
select, input[type=number], select {
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
                <a href="<?php echo site_url();?>Dashboard/index" class="menu-btn">
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
                    <a href="<?php echo site_url();?>Dashboard/stokmasuk"><i class="fas fa-box"></i><span>Stok Masuk</span></a>
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
                <a href="<?php echo site_url();?>Dashboard/user" class="menu-btn">
                    <i class="fas fa-user-alt"></i><span>Pengguna</span>
                </a>
            </li>
            <br><br><br><br><br><br><li class="item" style="background: #55B1F0">
                <a style="font-size:20px; margin-left: 50px" href="<?php echo site_url();?>Login/logout" class="menu-btn" >
                    <i class="fas"></i><span>logout</span>
                </a>
            </li>
        </div>
    </div>
    <div class= "container">
                <div class="main-container">
                   <div class="header-menu">
                       <center><h1>Kasir
                       </h1><br><br><center>
                       <form action="<?= base_url() ?>Dashboard/ubahSupp" method="post">
                    <div class="form-group">
                    <select name="kodebarang" class="form-control" onchange="getNama()"></select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="qty" class="form-control"   placeholder="Jumlah..">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                   
                   
                   
                </div>

                
            </div>  
        
    </div> 
    

</div>
<script src="<?php echo base_url().'css/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'css/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'css/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'css/js/moment.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>


</body>
</html>
