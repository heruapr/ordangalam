<?php echo $__env->make('inc/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<form>
  <fieldset>
    <legend>EDIT PROFIL</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Nama Lengkap</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="nama lengkap">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Silahkan isi data anda dengan lengkap.</small>
    </div>
    <fieldset class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php echo $__env->make('inc/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>