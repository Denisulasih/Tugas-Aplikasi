<div class="box box-primary">
  <div class="box-header with-border">
    <div class="box-title">tambah data user</div>
  </div>
  <div class="box-body">
    <form action="<?php echo base_url() ?>index.php/Welcome/simpan_user" method="POST">
      <input type="text" name="nama" class="form-control input-lg" placeholder="nama"><br>
      <input type="text" name="username" class="form-control input-lg" placeholder="username"><br>
      <input type="text" name="password" class="form-control input-lg" placeholder="password"><br>
      <button class="btn btn-primary btn-lg" type="submit">tambah data user</button><br>
    </form>
  </div>
</div>