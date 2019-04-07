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
				<h2>Data Akun</h2>
				<ul class="nav navbar-right panel_toolbox">
					<div class="fa-hover col-md-3 col-sm-4 col-xs-12">
						<a href="<?php echo base_url('akun/tambah'); ?>"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></a>
					</div>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="tb-data" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
					<thead>
						<tr role="row">
							<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending"
							 aria-label="Name: activate to sort column descending" style="width: 250px;">Username</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
							 style="width: 140.01px;">Nama Lengkap</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
							 style="width: 150px;">Password</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
							 style="width: 150px;">Status</th>
							<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
							 style="width: 170px;">Aksi</th>
						</tr>
					</thead>


					<tbody>
						<?php foreach($akun as $ak): ?>
              <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $ak['username'] ?></td>
                <td><?php echo $ak['nama_lengkap']; ?></td>
                <td><?php echo $ak['password']; ?></td>
                <td><?php if($ak['status']!=0){ echo "Aktif"; }else{ echo "Tidak Aktif"; } ?></td>
                <td>
                  <a href="<?php echo base_url('akun/edit/'.$ak['username']); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit
                  </a>
                  <a href="<?php echo base_url('akun/hapus/'.$ak['username']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
                    Delete </a>
                </td>
              </tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- /page content -->
