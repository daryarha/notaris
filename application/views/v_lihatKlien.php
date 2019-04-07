<!-- page content -->

<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3></h3>
			</div>


		</div>

		<div class="clearfix"></div>

		<div class="x_panel">
			<div class="x_title">
				<h2>Data Klien</h2>
				<ul class="nav navbar-right panel_toolbox">
					<div class="fa-hover col-md-3 col-sm-4 col-xs-12">
						<?php if($mode=='Pin'){ ?>
						<a href="<?php echo base_url('klien/tambah'); ?>"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></a>
						<?php } ?>
					</div>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="tb-data" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
					<thead>
						<tr role="row">
							<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending"
							 aria-label="Name: activate to sort column descending" style="width: 250px;">Nomor KTP</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
							 style="width: 140px;">Nama Lengkap</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
							 style="width: 140.01px;">Tanggal lahir</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
							 style="width: 150px;">Nomor HP</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
							 style="width: 170px;">Aksi</th>
						</tr>
					</thead>


					<tbody>
						<?php foreach($klien as $kl): ?>
						<tr role="row" class="odd">
							<td class="sorting_1">
								<?php echo $kl['nomor_KTP']; ?>
							</td>
							<td>
								<?php echo $kl['nama_lengkap']; ?>
							</td>
							<?php $ttl = date("d/m/Y",strtotime($kl['tanggalLahir'])); ?>

							<td>
								<?php echo $ttl; ?>
							</td>
							<td>
								<?php echo $kl['nomor_HP']; ?>
							</td>

							<td>
								<a data-toggle="modal" data-target="#riwayat" data-id_klien="<?php echo $kl['nomor_KTP']; ?>" class="btn btn-primary btn-xs btn-riwayat"><i class="fa fa-folder"></i> View </a>
								<a href="<?php echo base_url('klien/edit/'.$kl['nomor_KTP']); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>
									Edit </a>

								<?php if($mode=='Nin'){ ?>
								<a href="<?php echo base_url('klien/hapus/'.$kl['nomor_KTP']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
									Delete </a>
								<?php } ?>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<div class="modal fade" id="riwayat" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Riwayat Klien</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        <table class="table table-sm" id="tb-riwayat">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Nama Pekerjaan</th>
                  <th scope="col">Tgl Mulai</th>
                  <th scope="col">Tgl Selesai</th>
                  <th scope="col">Petugas</th>
                </tr>
            </thead>
            <tbody id="riwayat_klien">
            </tbody>
        </table>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<!-- /page content -->
