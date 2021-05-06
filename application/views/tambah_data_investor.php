<div class="box box-primary">
  <div class="box-header with-border">
    <div class="box-title">tambah data investor</div>
  </div>
  <div class="box-body">
    <form action="<?php echo base_url() ?>index.php/Welcome/simpan_investor" method="POST">
      <input type="text" name="nama" class="form-control input-lg" placeholder="nama"><br>
      <input type="text" name="alamat" class="form-control input-lg" placeholder="alamat"><br>
      <input type="text" name="keterangan" class="form-control input-lg" placeholder="keterangan"><br>
      <button class="btn btn-primary btn-lg" type="submit">tambah data investor</button><br>
    </form>
  </div>
</div>