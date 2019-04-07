

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
                    <h2>Data Order</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
                      <?php if($mode=='Pin'){ ?>
                        <a href="<?php echo base_url('order/tambah'); ?>"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></a>
                      <?php } ?>
                        </div>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="tb-data" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 250px;">Klien</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Pekerjaan</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 170px;">Nama Pekerjaan</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Tanggal Mulai</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Tanggal Selesai</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Petugas</th>
                             <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Status</th>
                             <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Keterangan Tambahan</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 250px;">Aksi</th></tr>
                      </thead>


                      <tbody>
                      <?php foreach($orders as $or): ?>
                      <tr role="row" class="odd">
                          <td class="sorting_1"><?php echo $or['nama_klien']; ?></td>
                          <td><?php echo $or['pekerjaan']; ?></td>
                          <td><?php echo $or['nama_pekerjaan']; ?></td>
                          <td><?php echo date("d/m/Y",strtotime($or['tgl_mulai'])); ?> </td>
                          <td><?php echo date("d/m/Y",strtotime($or['tgl_selesai'])); ?> </td>
                          <td><?php echo $or['nama_petugas']; ?> </td>
                          <td><?php if($or['status']==1){ echo "Belum diverifikasi"; }else if($or['status']==2){ echo "Terverifikasi"; }else { echo "Selesai"; }; ?> </td>
                          <td><?php echo $or['keterangan']; ?></td>
                          <td> 
                      <?php if($mode=='Pin'){ ?>
                             <a href="<?php echo base_url('order/edit/'.$or['id']); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                      <?php } ?>
                      <?php if($mode=='Nin'){ ?>
                             <a href="<?php echo base_url('order/verifikasi/'.$or['id']); ?>" class="btn btn-info btn-xs"><i class="fa fa-thumbs-up"></i> Verifikasi </a>
                             <a href="<?php echo base_url('order/selesai/'.$or['id']); ?>" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> Selesai </a>
                            <a href="<?php echo base_url('order/hapus/'.$or['id']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
