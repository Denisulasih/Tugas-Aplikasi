<div class="box box-primary">
  <div class="box-header with-border">
    <div class="box-title">edit data asset</div>
  </div>
  <div class="box-body">
    <form action="<?php echo base_url() ?>index.php/Welcome/update_asset" method="POST">
      <?php foreach ($ambilIdDataAsset as $tampilkan) { ?>
      <input type="hidden" name="id_asset" value="<?php echo $tampilkan->id_asset ?>">
      
      <input type="text" name="nama_barang" class="form-control input-lg" placeholder="nama barang" value="<?php echo $tampilkan->nama_barang ?>"><br>
      <input type="text" name="jumlah" class="form-control input-lg" placeholder="jumlah" value="<?php echo $tampilkan->jumlah ?>"><br>
      <input type="text" name="kondisi" class="form-control input-lg" placeholder="kondisi"  value="<?php echo $tampilkan->kondisi ?>"><br>
      <input type="text" name="keterangan" class="form-control input-lg" placeholder="keterangan"  value="<?php echo $tampilkan->keterangan ?>"><br>
      <?php 
}
       ?>
      <button class="btn btn-primary btn-lg" type="submit">edit data asset</button><br>
    </form>
  </div>
</div>