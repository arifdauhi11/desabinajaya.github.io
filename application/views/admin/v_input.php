<div class="card-header col-md-6" align="center">Tambah Data Penduduk</div>
      <div class="card-body">
        <form action="<?php echo base_url(). 'admin/tambah_aksi'; ?>" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required="required" autofocus="autofocus">
                  <label for="nama">Masukkan Nama</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="agama" name="agama" class="form-control" placeholder="Agama" required="required" autofocus="autofocus">
                  <label for="agama">Masukkan Agama</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required="required" autofocus="autofocus">
                  <label for="pekerjaan">Masukkan Pekerjaan</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="jenkel" name="jenkel" class="form-control" placeholder="Jenkel" required="required" autofocus="autofocus">
                  <label for="jenkel">Masukkan Jenis Kelamin</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="umur" name="umur" class="form-control" placeholder="Umur" required="required" autofocus="autofocus">
                  <label for="umur">Masukkan Umur</label>
                </div>
              </div>
            </div>
          </div>          
            <input class="btn btn-primary" type="submit" value="Tambah">
        </form>
      </div>