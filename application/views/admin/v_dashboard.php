
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Penduduk</div>
          <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Agama</th>
                          <th>Pekerjaan</th>
                          <th>Jenis Kelamin</th>
                          <th>Umur</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php 
                      $no = 1;
                      foreach($penduduk as $p){ 
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $p->nama ?></td>
                        <td><?php echo $p->agama ?></td>
                        <td><?php echo $p->pekerjaan ?></td>
                        <td><?php echo $p->jenkel ?></td>
                        <td><?php echo $p->umur ?></td>
                        <td>
                        <a href="<?php echo base_url('admin/edit/'.$p->id); ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo base_url('admin/hapus/'.$p->id); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </table>
              <a href="<?php echo base_url('admin/tambah'); ?>" class="btn btn-primary">
              <i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>
