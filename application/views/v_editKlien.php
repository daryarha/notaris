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
				<h2>Ubah Klien</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<?php echo validation_errors(); ?>

				<?php echo form_open('klien/edit/'.$klien['nomor_KTP'], 'class="form-horizontal form-label-left"'); ?>


				<div class="form-group">
					<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor KTP</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $klien['nomor_KTP'] ?>" readonly
						 name="nomor_ktp">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="first-name" required name="nama" value="<?php echo $klien['nama_lengkap'] ?>" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<?php $ttl = date("m/d/Y",strtotime($klien['tanggalLahir'])); ?>
						<div class="input-group date" data-provide="datepicker">
							<input type="text" class="form-control" name="ttl" value="<?php echo $ttl; ?>">
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
						<input name="nomor_hp" value="<?php echo $klien['nomor_HP'] ?>" class="form-control col-md-7 col-xs-12"
						 required type="text">
					</div>
				</div>
				<div class="ln_solid"></div>
				<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<a href="<?php echo base_url('klien'); ?>" class="btn btn-primary">Batal</a>
						<button class="btn btn-primary" type="reset">Reset</button>
						<button type="submit" class="btn btn-success">Ubah</button>
					</div>
				</div>

				</form>
			</div>
		</div>
	</div>
</div>

<!-- /page content -->
