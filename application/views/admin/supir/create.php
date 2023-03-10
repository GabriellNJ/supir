  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Supir</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url($home_url)?>">Home</a></li>
              <li class="breadcrumb-item active">Master Supir</li>
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
              <h3 class="card-title">Master Supir</h3>
              <a href="<?=base_url($home_url.'/supir')?>"><button type="button" class="btn btn-sm btn-info btn-flat" style="float:right;">Kembali</button></a>
            </div>
            <!-- /.card-header -->
            <form class="form-create">
            <?=form_hidden($csrf['name'],$csrf['hash'])?>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputUser">User</label>
                  <select class="form-control select2" name="iduser" id="inputUser" required>
                    <option selected="selected">-- Pilih --</option>
                    <?php foreach($dataAkunTersedia as $vAtersedia): ?>
                    <option value="<?=$vAtersedia['id_user']?>"><?=$vAtersedia['username_user']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputNama">Nama Supir</label>
                  <input type="text" class="form-control" name="nama" id="inputNama" placeholder="Masukan Nama ..." maxlength="70" required>
                </div>
                <div class="form-group">
                  <label for="inputNoHP">No HP Supir</label>
                  <input type="text" class="form-control" name="nohp" id="inputNoHP" placeholder="Masukan No HP ..." maxlength="13" required>
                </div>
                <div class="form-group">
                  <label for="inputAlamat">Alamat Supir</label>
                  <textarea class="form-control" name="alamat" id="inputAlamat" placeholder="Masukan Alamat ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="inputTTL">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="ttl" id="inputTTL" placeholder="Masukan Tanggal Lahir ..."></input>
                </div>
                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Masukan Email Lahir ..."></input>
                </div>
              </div>
            <div class="card-footer">
              <button type="submit" name="submitSupir" class="btn btn-primary" value="submitSupir">Submit</button>
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