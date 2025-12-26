<section class="content-header">
    <h1>Master<small>Data Porsenils</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data Porsenils</li>
    </ol>
</section>
<?php


////////////////////


	//17.08.2020 | 03.54 pagi , done
	//include "dist/koneksi.php";
	function encrypt_decrypt($action, $string) {
	//hahengCat
	include "dist/koneksi.php";	

    	// hash
   	 $key = hash('sha256', $secret_key);
    
    	// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    	$iv = substr(hash('sha256', $secret_iv), 0, 16);
    	if ( $action == 'encrypt' ) {
        	$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        	$output = base64_encode($output);
    	} else if( $action == 'decrypt' ) {
        	$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    	}
    		return $output;
	}
////////////////////



	$tampilPassword=mysqli_query($Open,"SELECT * FROM tb_password WHERE deskripsi != ''");
	$tampilPassword0=mysqli_query($Open,"SELECT * FROM tb_password WHERE passwd != ''");
	$tampilPassword1=mysqli_query($Open,"SELECT * FROM tb_password WHERE judul != ''");
	$tampilPassword2=mysqli_query($Open,"SELECT * FROM tb_password WHERE id_user != ''");
	$tampilPassword4=mysqli_query($Open,"SELECT * FROM tb_password WHERE kategori != ''");
	$tampilPassword5=mysqli_query($Open,"SELECT * FROM tb_password WHERE url != ''");
	//dipaksa nya au
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								 <h4 class="panel-title"><i class="fa fa-plus"></i> Add Data Porsenils<a data-toggle="collapse" data-target="#formpasswd" href="#formpasswd" class="collapsed"></a></h4>
							</div>
							<div id="formpasswd" class="panel-collapse collapse">
								<div class="panel-body">
									<form action="home-admin.php?page=master-password" class="form-horizontal" method="POST" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-3 control-label">Full Name</label>
											<div class="col-sm-7">
												<input type="text" name="judul" class="form-control" placeholder="Name" maxlength="255">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Plat</label>
											<div class="col-sm-7">
												<input type="text" name="id_user" class="form-control" placeholder="Plat Number" maxlength="255">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Address</label>
											<div class="col-sm-7">
												<textarea name="passwd" class="form-control" placeholder="Address" rows="7" cols="34"></textarea>
												</textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kategori</label>
											<div class="col-sm-7">
												<input type="text" name="kategori" class="form-control" placeholder="Kategori" maxlength="64">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">URL/Link/WA/hp</label>
											<div class="col-sm-7">
												<input type="text" name="url" class="form-control" placeholder="URL" maxlength="64">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Description of you</label>
											<div class="col-sm-7">
												<textarea type="text" name="deskripsi" class="form-control" placeholder="Description of you, hobby" rows="7" cols="34"></textarea>
												</textarea>												
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-7">
												<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Plat Number</th>
								<th>Address</th>
								<th>Kategori</th>
								<th>URL/Link/WA/hp</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
						//17.08.2020|3.48 : pusing ndak mau row all data
						//17.08.2020 | 03.54 pagi , done
							//while($password=mysqli_fetch_array($tampilPassword)){
						//while($password=mysqli_fetch_assoc($tampilPassword)){
							
						//if ($tampilPassword) {

    						//$password = $tampilPassword->fetch_row();

						while (null !== ($password = $tampilPassword->fetch_assoc()) || ($password0 = $tampilPassword0->fetch_assoc()) || ($password1 = $tampilPassword1->fetch_assoc()) || ($password2 = $tampilPassword2->fetch_assoc()) || ($password4 = $tampilPassword4->fetch_assoc()) || ($password5 = $tampilPassword5->fetch_assoc())) {


//$encrypted_txt = $pegawaidlljoysavetycar['nama'];
//$decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);

						?>	
							<tr>
								<td><?php echo encrypt_decrypt('decrypt', $password0['judul']);?></td>
								<td><?php echo encrypt_decrypt('decrypt', $password1['id_user']);?></td>
								<td><?php echo encrypt_decrypt('decrypt', $password2['passwd']);?></td>
								<td><?php echo $password['kategori'];?></td>
								<td><?php echo $password['url'];?></td>
								
								<?php //27.12.2025|03.36 WIB oNPasakBumi dodol : pusing ane, ndak mau row all data ?>
								<?php //27.12.2025|04.09 WIB : pusing ane, ndak mau row all data ?>
								<?php //27.12.2025|04.09 WIB : pusing ane, ndak mau row all data, hahengcat ?>
								<td><?php echo $password['deskripsi'];?></td>
								<td align="center"><i class="fa  fa-refresh"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=form-edit-data-password&judul=<?php echo $password['judul'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=delete-data-password&judul=<?php echo $password['judul'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
	</div>
</section>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
