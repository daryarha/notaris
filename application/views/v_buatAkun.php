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
				<h2>Tambah Akun</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<?php echo validation_errors(); ?>

				<?php echo form_open('akun/tambah', 'class="form-horizontal form-label-left"'); ?>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="username" value="<?php echo set_value('nama'); ?>" required class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" required name="nama" value="<?php echo set_value('nama'); ?>" class="form-control col-md-7 col-xs-12">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="form-control col-md-7 col-xs-12" type="password" value="<?php echo set_value('password'); ?>" name="password">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12">Re-type Password</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="form-control col-md-7 col-xs-12" type="password" value="<?php echo set_value('passconf') ?>" name="passconf">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12">Hak Akses</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select name="privil" class="form-control" required>
							<option value="1">Pemilik</option>
							<option value="2">Pegawai</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12">Status Aktif<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<label>
							<input type="checkbox" name="status" required value="1" checked <?php echo set_checkbox('status','value'); ?>/>
							Aktif
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<a href="<?php echo base_url('akun'); ?>" class="btn btn-primary">Batal</a>
						<button class="btn btn-primary" type="reset">Reset</button>
						<button type="submit" class="btn btn-success">Tambah</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
