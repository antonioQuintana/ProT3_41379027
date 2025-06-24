
<!-- Formulario de Login -->
<section id="login" class="container my-5">
  <h3 class="text-center text-white mb-4">Iniciar sesión</h3>
      <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
          <?= session()->getFlashdata('msg')?>
        </div>
      <?php endif;?>


  <form method="post" action="<?php echo base_url('/enviarlogin') ?>" class="border rounded-3 bg-light p-4 shadow mx-auto" style="max-width: 500px;">
    <div class="mb-3">
      <label for="login-correo" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="login-correo" name="correo-elec" placeholder="correo.ejemplo@gmail.com">
    </div>
    <div class="mb-3">
      <label for="login-contraseña" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="login-contraseña" name="contraseña" placeholder="***********">
    </div>
    <button type="submit" class="btn btn-success w-100 fw-bold">Ingresar</button>
    <a href="<?php echo base_url('/login'); ?>" class="btn btn-secondary w-100 mt-2">Cancelar</a>
  </form>
</section>