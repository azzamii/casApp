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
                       <center><h1>Stok Masuk</h1></center><br><br>
                </div>
                <table class="table table-bordered table-striped" id="mydata">

<thead>

      <tr>
            <th>Kode barang</th>

            <th>Nama barang</th>

            <th>stok</th>

            <th>Aksi</th>
            

      </tr>

</thead>

<tbody>

      <?php

            foreach($data->result_array() as $i):

                  $kodebarang=$i['kodebarang'];

                  $namabarang=$i['namabarang'];

                  $stok=$i['stok'];

                  

      ?>

      <tr>
      <td><?php echo $kodebarang;?> </td>

            <td><?php echo $namabarang;?> </td>

            <td><?php echo $stok;?> </td>
            
            <td>
            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $kodebarang;?>"> Tambah Stok</a>
            </td>

            

      </tr>

      <?php endforeach;?>

</tbody>

</table>
         
                </div>
                 

    <!-- ============ MODAL EDIT BARANG =============== -->
    <?php 
        foreach($data->result_array() as $i):
            $kodebarang=$i['kodebarang'];
            $namabarang=$i['namabarang'];
            $stok=$i['stok'];
        ?>
        <div class="modal fade" id="modal_edit<?php echo $kodebarang;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Stok</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'Dashboard/tambah_stok'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barang</label>
                        <div class="col-xs-8">
                            <input name="kodebarang" value="<?php echo $kodebarang;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-8">
                            <input name="namabarang" value="<?php echo $namabarang;?>" class="form-control" type="text" placeholder="Nama Barang..." readonly>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Stok Masuk</label>
                        <div class="col-xs-8">
                            <input name="jumlah_masuk"  class="form-control" type="text" placeholder="Tambahkan Stok Masuk..." required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>

    <?php endforeach;?>
    <!--END MODAL ADD BARANG--> 

                
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
