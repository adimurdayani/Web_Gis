<div class="panel-body">
 <form role="form" action="<?= base_url('login/login'); ?>" method="POST">
  <fieldset>
   <div class="form-group">
    <input class="form-control" placeholder="E-mail" name="email" id="email" type="text"
     value="<?= set_value('email'); ?>" autofocus>
    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
   </div>
   <div class="form-group">
    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
   </div>
   <!-- Change this to a button or input when using this as a form -->
   <button type="submit" class="btn btn-primary btn-block">Login</button>
  </fieldset>
 </form>
</div>