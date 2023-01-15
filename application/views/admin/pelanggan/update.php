  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pelanggan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url($home_url)?>">Home</a></li>
              <li class="breadcrumb-item active">Master Pelanggan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Master Pelanggan</h3>
              <a href="<?=base_url($home_url.'/pelanggan')?>"><button type="button" class="btn btn-sm btn-info btn-flat" style="float:right;">Kembali</button></a>
            </div>
            <!-- /.card-header -->
            <form class="form-update">
            <?=form_hidden($csrf['name'],$csrf['hash'])?>
              <input type="hidden" class="form-control" name="id" value="<?=$id_pelanggan?>" required>
              <input type="hidden" class="form-control" name="nohp_old" value="<?=$dataPelanggan['nohp_pelanggan']?>" required>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputNama">Nama Pelanggan</label>
                  <input type="text" class="form-control" name="nama" id="inputNama" placeholder="Masukan Nama ..." maxlength="70" value="<?=$dataPelanggan['nama_pelanggan']?>" required>
                </div>
                <div class="form-group">
                  <label for="inputNoHP">No HP Pelanggan</label>
                  <input type="text" class="form-control" name="nohp" id="inputNoHP" placeholder="Masukan No HP ..." maxlength="13" value="<?=$dataPelanggan['nohp_pelanggan']?>" required>
                </div>
                <div class="form-group">
                  <label for="inputAlamat">Alamat Pelanggan</label>
                  <textarea class="form-control" name="alamat" id="inputAlamat" placeholder="Masukan Alamat ..."><?=$dataPelanggan['alamat_pelanggan']?></textarea>
                </div>
              </div>
            <div class="card-footer">
              <button type="submit" name="submitPelanggan" class="btn btn-primary" value="submitPelanggan">Submit</button>
            </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->