
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
                    <h2>Produktivitas Pegawai</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/plus-square-o"><i class="fa fa-plus-square-o"></i></a>
                        </div> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <table id="tb-data" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 250px;">Nama Petugas</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 140px;">Jumlah Order</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 140.01px;">Order Sedang Jalan </th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Order Selesai</th>
                        
                      </thead>


                      <tbody>
                      <?php foreach($produktif as $pro): ?>
                      <tr role="row" class="odd">
                          <td class="sorting_1"><?php echo $pro['nama_petugas']; ?></td>
                          <td><?php echo $pro['jumlah_order']; ?></td>
                          <td><?php echo $pro['order_jalan']; ?></td>
                          <td><?php echo $pro['order_selesai']; ?></td>
                      </tr>
                      <?php endforeach ?>
                      </tbody>
                    </table></div></div>
                    </div>
                </div>
          </div>
        </div>
            
        <!-- /page content -->
