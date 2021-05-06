<div class="box box-primary">
  <div class="box-header with-border">
    <div class="box-title">tambah data asset</div>
  </div>
  <div class="box-body">
    <form action="<?php echo base_url() ?>index.php/Welcome/simpan_asset" method="POST">
      <input type="text" name="nama_barang" class="form-control input-lg" placeholder="nama barang"><br>
      <input type="text" name="jumlah" class="form-control input-lg" placeholder="jumlah"><br>
      <input type="text" name="kondisi" class="form-control input-lg" placeholder="kondisi"><br>
      <input type="text" name="keterangan" class="form-control input-lg" placeholder="keterangan"><br>
      <button class="btn btn-primary btn-lg" type="submit">tambah data asset</button><br>
    </form>
  </div>
</div>