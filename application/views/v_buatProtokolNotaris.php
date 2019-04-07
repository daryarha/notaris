

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
                    <h2>Tambah Protokol Notaris</h2>
                
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <div class="text-center">
                      <?php echo $error; ?>
                    </div>

                      <?php echo form_open_multipart('protokol/tambah', 'class="form-horizontal form-label-left"'); ?>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Protokol Notaris<span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" class="form-control" name="no_protokol" required>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Akta</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control has-feedback-left" required name="tgl_akta" id="single_cal3">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                              </div>
                      </div>

                          <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Order</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required name="id_order">
                            <option disabled>Pilih Order</option>
                            <?php foreach($order as $or): ?>
                            <option value="<?php echo $or['id'] ?>"><?php echo $or['nama_pekerjaan']; ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     File protokol harus dalam format pdf.
                        </div>
                      </div>

                          <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">File Protokol Notaris</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" required name="nama_file" class="form_control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Lemari<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="no_lemari"  required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<a href="<?php echo base_url('protokol'); ?>" class="btn btn-primary">Batal</a>
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
