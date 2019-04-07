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
				<h2>Ubah Order</h2>



				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<?php echo validation_errors(); ?>

				<?php echo form_open('order/edit/'.$order['id'], 'class="form-horizontal form-label-left"'); ?>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Klien<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="klien" required>
								<option disabled>Pilih Klien</option>
                <?php foreach($klien as $kl): ?>
								<option value="<?php echo $kl['nomor_KTP']; ?>" <?php if($kl['nomor_KTP']==$order['nomor_ktp']){ echo "selected"; } ?>><?php echo $kl['nama_lengkap']; ?></option>
                <?php endforeach ?>
							</select>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" required type="text" value="<?php echo $order['pekerjaan']; ?>" name="pekerjaan">
						</div>
					</div>

					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Pekerjaan<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="jenis_pekerjaan" required>
								<option disabled>Pilih Pekerjaan</option>
								<option value="Notaris" <?php if("Notaris"==$order['jenis_pekerjaan']){ echo "selected"; } ?>>Notaris</option>
								<option value="PPAT">PPAT</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pekerjaan<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $order['nama_pekerjaan']; ?>" name="nama_pekerjaan" required>
						</div>
					</div>

					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Mulai - Tanggal selesai<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="input-prepend input-group">
									<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
									<input type="text" style="width: 200px" name="tgl" id="reservation" class="form-control" value="<?php echo date("m/d/Y",strtotime($order['tgl_mulai'])); ?> - <?php echo date("m/d/Y",strtotime($order['tgl_selesai'])); ?>" />
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Instansi<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" required name="instansi">
								<option disabled>Pilih Instansi</option>
                <?php foreach($instansi as $in): ?>
								<option value="<?php echo $in['id']; ?>" <?php if($in['id']==$order['id_instansi']){ echo "selected"; } ?>><?php echo $in['nama']; ?></option>
                <?php endforeach ?>
							</select>
						</div>
					</div>


					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan Tambahan</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="message" class="form-control" name="keterangan" data-parsley-trigger="keyup"
							 data-parsley-minlength="20" data-parsley-maxlength="100"><?php echo $order['keterangan']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan Progress</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="message" class="form-control" name="progress" data-parsley-trigger="keyup"
							 data-parsley-minlength="20" data-parsley-maxlength="100"><?php echo $order['progress']; ?></textarea>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<a href="<?php echo base_url('order'); ?>" class="btn btn-primary">Batal</a>
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
