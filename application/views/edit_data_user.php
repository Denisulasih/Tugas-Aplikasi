
<div class="box box-primary">
  <div class="box-header with-border">
    <div class="box-title">edit data user</div>
  </div>
  <div class="box-body">
    <form action="<?php echo base_url() ?>index.php/Welcome/update_user" method="POST">
      <?php foreach ($ambilIdDataUser as $tampilkan) { ?>
      <input type="hidden" name="id_user" value="<?php echo $tampilkan->id_user ?>">
      
      <input type="text" name="nama" class="form-control input-lg" placeholder="nama" value="<?php echo $tampilkan->nama ?>"><br>
      <input type="text" name="username" class="form-control input-lg" placeholder="username" value="<?php echo $tampilkan->username ?>"><br>
      <input type="text" name="password" class="form-control input-lg" placeholder="password"  value="<?php echo $tampilkan->password ?>"><br>
      <?php 
}
       ?>
      <button class="btn btn-primary btn-lg" type="submit">edit data user</button><br>
    </form>
  </div>
</div>