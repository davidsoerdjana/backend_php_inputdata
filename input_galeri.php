<?php 
	include "header.php"
?>

<?php
 	include "sidebar.php"
?>

<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
			<div class="row">
				<div class="col-lg-12">
					<section class="panel">
						<header class="panel-heading">
							INPUT DATA GALERY
							<span class="tools pull-right">
								<a class="fa fa-chevron-down" href="javascript:;"></a>
								<a class="fa fa-cog" href="javascript:;"></a>
								<a class="fa fa-times" href="javascript:;"></a>
							</span>
						</header>

						<div class="panel-body">
							<div class="form">
								<form class="cmxform form-horizontal" method="post" action="proses_galeri.php" enctype="multipart/form-data" novalidate="novalidate">
									<!--untuk input judul berita  -->
									<div class="form-group">
										<label for="cname" class="control-label col-lg-3">JUDUL</label>
										<div class="col-lg-6">
											<input type="text" name="judul" placeholder="masukkan judul...">
										</div>
									</div>

									<!--untuk input foto dari galeri  -->
									<div class="form-group">
										<label for="cmail" class="control-label col-lg-3">GAMBAR</label>
										<div class="col-lg-6">
											<input type="file" name="file_gambar">
										</div>
									</div>

									<!--untuk input isi berita  -->
									<div class="form-group">
										<label for="ccomment" class="control-label col-lg-3">ISI BERITA</label>
										<div class="col-lg-6">
											<textarea class="form-control" name="txt_ket" required=""> </textarea>
										</div>
									</div>

									<!--untuk button SAVE dan CANCEL  -->
									<div class="form-group">
										<div class="col-lg-offset-3 col-lg-6">
											<button class="btn btn-primary" type="submit" name="btn_simpan">SAVE</button>
											<button class="btn btn-default" type="button" name="btn_cancel">CANCEL</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</section>
					
				</div>
				
			</div>
			
		</div>

	</section>
	
</section>

<?php
	include "footer.php"
?>