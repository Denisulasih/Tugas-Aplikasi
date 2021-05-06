
<div class="box box-primary">
  <div class="box-header with-border">
    <div class="box-title">edit data investor</div>
  </div>
  <div class="box-body">
    <form action="<?php echo base_url() ?>index.php/Welcome/update_investor" method="POST">
      <?php foreach ($ambilIdDataInvestor as $tampilkan) { ?>
      <input type="hidden" name="id_investor" value="<?php echo $tampilkan->id_investor ?>">
      
      <input type="text" name="nama" class="form-control input-lg" placeholder="nama" value="<?php echo $tampilkan->nama ?>"><br>
      <input type="text" name="alamat" class="form-control input-lg" placeholder="alamat" value="<?php echo $tampilkan->alamat ?>"><br>
      <input type="text" name="keterangan" class="form-control input-lg" placeholder="keterangan"  value="<?php echo $tampilkan->keterangan ?>"><br>
      <?php 
}
       ?>
      <button class="btn btn-primary btn-lg" type="submit">edit data investor</button><br>
    </form>
  </div>
</div>