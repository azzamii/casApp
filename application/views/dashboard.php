<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link href="<?php echo base_url().'css/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'css/css/jquery.dataTables.min.css'?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        
        
    </head>
   
  
    <body>

        <div class="wrapper">
            <div class="header">
                <div class="header-menu">
                    <div class="title">Cas<span>APP</span></div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li class="item"><a href="#" class="menu-btn"><i class="fas fa-user-alt"></i></a>
                        
                        </li>
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
                <a href="<?php echo site_url();?>Dashboard/transaksi" class="menu-btn">
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
            

        </div>

       

    </body>
</html>
      