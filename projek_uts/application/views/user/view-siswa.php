<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<?php $this->load->view('user/_partials/v-head') ?>
</head>
<body>
	<?php $this->load->view('user/_partials/v-header') ?>
	<!-- bradcam_area  -->
    <div class="bradcam_area" style="background-image: url(assets/img/banner/Data_siswa.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Data Siswa</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- Tabel -->
    <br>
	<div class="table-responsive">
		<h3 class="mb-30">Data Siswa</h3>
		<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th style="width: 15%">Photo</th>
					<th style="width: 30%">Nama Siswa</th>
					<th style="width: 5%">Kelas</th>
					<th style="width: 30%">Alamat</th>
					<th style="width: 15%">Tahun Masuk</th>
				</tr>
			</thead>
					<tbody>
						<?php foreach ($tbl_siswa as $row): 
							$no = 1;
						?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td>
							<img src="<?php echo base_url('assets/img/'.$row->foto) ?>" width="150" />
						</td>
						<td width="150">
							<?php echo $row->nama_siswa ?>
						</td>
						<td>
							<?php echo $row->kelas ?>
						</td>
						<td width="150" >
							<?php echo substr($row->alamat, 0, 120) ?>...
						</td>
						<td width="150" >
							<?php echo $row->th_masuk ?>
						</td>
				</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
		<!-- / Tabel -->
	</div>
</body>
<?php $this->load->view('user/_partials/v-footer') ?>
<?php $this->load->view('user/_partials/v-js') ?>
</html>