<?php include "header.php"?>
<!--header end--> 
<!--sidebar start-->
<?php include "sidebar.php"?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Responsive Table
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <a href="input_galeri.php" class="btn btn-primary">Tambah Data</a>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           <th>NO</th>
            <th>JUDUL</th>
            <th>FOTO</th>
            <th>KETERANGAN</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "koneksi.php";
          $no = 1;
          $sql = mysqli_query($con, "SELECT * FROM galeri");
          while ($row = mysqli_fetch_array($sql)){
            ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['judul_foto'];?></td>
            <td><img src="images/<?php echo $row['foto'];?>" style="width:100px"></td>
            <td><?php echo $row['ket_foto'];?></td>
            <td>
        <a href="edit_galeri.php?url=<?php echo $row['id_galeri'];?>" class="btn btn-success">EDIT</a>
              <a href="proses_galeri.php?url=<?php echo $row['id_galeri']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini??')">DELETE</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
   <?php include "footer.php" ?>