<?php

include "koneksi.php";
$id = $_GET['url'];

$sql = mysqli_query($con, "SELECT * FROM film where id_film = '$id'");

while($row = mysqli_fetch_array($sql)){

?>

<?php include "header.php"?>
<!--header end-->
<!--sidebar start-->
<?php include "sidebar.php"?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
<!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            INPUT DATA FILM
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>

        <div class="panel-body">
            <div class=" form">
                <form class="cmxform form-horizontal " method="post" action="proses_film.php?url=<?php echo $row['id_film']?>" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-3">JUDUL FILM
                        </label>
                            <div class="col-lg-6">
                                <input class=" form-control" name="judul" minlength="2" type="text" value="<?php echo $row['judul_film']?>" required="" placeholder="Masukan Judul...">
                            </div>
                    </div>

                    <div class="form-group ">
                        <label for="cemail" class="control-label col-lg-3">FOTO FILM
                        </label>
                            <div class="col-lg-6">
                                <input class="form-control " type="file" name="file_gambar">
                                    <img src="images/<?php echo $row ['foto']?>" style="width:100px">
                                <input type= "hidden" name="foto" value="<?php echo $row['foto']?>">
                            </div>
                    </div>

                    <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-3">KETERANGAN FILM</label>
                            <div class="col-lg-6">
                                <textarea class="form-control " name="txt_ket" required=""><?php echo $row['ket_foto']?></textarea>
                            </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
                            <button class="btn btn-primary" type="submit" name="btn_edit">Save</button>
                            <button class="btn btn-default" type="button">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
  </div>
</div>

<!-- page end-->
</div>
</section>


<?php include "footer.php"?>

<?php } ?>