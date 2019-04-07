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
				<h2>Tambah Klien</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<?php echo validation_errors(); ?>

				<?php echo form_open('klien/tambah', 'class="form-horizontal form-label-left"'); ?>
				<div class="form-group">
					<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor KTP *</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="form-control col-md-7 col-xs-12" type="text" name="nomor_ktp" value="<?php echo set_value('nomor_ktp'); ?>"
						 required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="nama" required value="<?php echo set_value('nama'); ?>" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" class="form-control" name="ttl">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor HP<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input name="nomor_hp" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo set_value('nomor_hp'); ?>"
						 required type="text">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<a href="<?php echo base_url('klien'); ?>" class="btn btn-primary">Batal</a>
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
