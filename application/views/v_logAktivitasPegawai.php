
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
                    <h2>Log Aktivitas Pegawai</h2>
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
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 250px;">Username</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 140px;">IP</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 140.01px;">Aktivitas </th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Waktu</th>
                        
                      </thead>


                      <tbody>
                      <?php foreach($log as $l): ?>
                      <tr role="row" class="odd">
                          <td><?php echo $l['username']; ?></td>
                          <td><?php echo $l['IP']; ?></td>
                          <td><?php echo $l['aktivitas']; ?></td>
                          <td><?php echo $l['waktu']; ?></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table></div></div>
                    </div>
                </div>
          </div>
        </div>
            
        <!-- /page content -->
