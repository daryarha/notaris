

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
                    <h2>Data Protokol Notaris</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
                      <?php if($mode=='Nin'){ ?>
                          <a href="<?php echo base_url('protokol/tambah'); ?>"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></a>
                      <?php } ?>
                        </div>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="tb-data" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 140px;">Nomor Protokol Notaris</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 140.01px;">Tanggal Akta</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Order</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">File Protokol Notaris</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 250px;">Nomor Lemari</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 170px;">Aksi</th></tr>
                      </thead>


                      <tbody>
                      <?php foreach($protokol as $pro): ?>
                      <tr role="row" class="odd">
                          <td><?php echo $pro['no_protokol']; ?></td>
                          <td><?php echo date("d-M-Y",strtotime($pro['tgl_akta'])); ?></td>
                          <td><?php echo $pro['nama_pekerjaan']; ?></td>
                          <td><?php echo $pro['nama_file']; ?></td>
                          <td class="sorting_1"><?php echo $pro['no_lemari']; ?></td>
                       
                         <td> <a href="<?php echo base_url('uploads/file_protokol/'.$pro['nama_file']); ?>" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                      <?php if($mode=='Nin'){ ?>
                             <a href="<?php echo base_url('protokol/edit/'.$pro['no_protokol']); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?php echo base_url('protokol/hapus/'.$pro['no_protokol']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                      <?php } ?>
                          </td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table></div></div>
                  </div>
                </div>
          </div>
        </div>
            
        <!-- /page content -->

