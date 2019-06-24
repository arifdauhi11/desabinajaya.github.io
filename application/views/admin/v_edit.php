<div class="card-header col-md-6" align="center">Edit Data Penduduk</div>
      <div class="card-body">
        <?php foreach($penduduk as $p){ ?>
        <form action="<?php echo base_url('admin/update'); ?>" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="hidden" name="id" value="<?php echo $p->id ?>">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required="required" autofocus="autofocus" value="<?php echo $p->nama ?>">
                  <label for="nama">Edit Nama</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="agama" name="agama" class="form-control" placeholder="Agama" required="required" autofocus="autofocus" value="<?php echo $p->agama ?>">
                  <label for="agama">Edit Agama</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required="required" autofocus="autofocus" value="<?php echo $p->pekerjaan ?>">
                  <label for="pekerjaan">Edit Pekerjaan</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="jenkel" name="jenkel" class="form-control" placeholder="Jenkel" required="required" autofocus="autofocus" value="<?php echo $p->jenkel ?>">
                  <label for="jenkel">Edit Jenis Kelamin</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="umur" name="umur" class="form-control" placeholder="Umur" required="required" autofocus="autofocus" value="<?php echo $p->umur ?>">
                  <label for="umur">Edit Umur</label>
                </div>
              </div>
            </div>
          </div>          
            <input class="btn btn-primary" type="submit" value="Simpan">
        </form>
        <?php } ?>
      </div>