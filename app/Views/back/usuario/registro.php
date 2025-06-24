<!-- Formulario de registro-->
<section id="registrarse" class="container my-5">
  <h3 class="text-center text-white mb-4">Registrarse</h3>


  <?php $validation= \Config\Services::validation();?>
  <form method="post" action="<?php echo base_url('enviar-form') ?>" class="border rounded-3 bg-light p-4 shadow mx-auto" style="max-width: 500px;">
    <?=csrf_field();?>
    
    <?php if(!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger">
      <?= session()->getFlashdata('fail')?>
    </div>
    <?php endif;?>
    <?php if(!empty (session()->getFlashdata('success'))):?>
    <div class="alert alert-success">
      <?= session()->getFlashdata('success')?>
    </div>
    <?php endif;?>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre_ape" placeholder="Ej. Antonio Quintana">
      <?php if($validation->getError('nombre_ape')) { ?><div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('nombre_ape');?>
      </div>
      <?php } ?>
    </div>
    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ej. 3794-000000">
      <?php if($validation->getError('telefono')) { ?><div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('telefono');?>
      </div>
      <?php } ?>
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="correo" name="email" placeholder="correo.ejemplo@gmail.com">
      <?php if($validation->getError('email')) { ?><div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('email');?>
      </div>
      <?php } ?>
    </div>
    <div class="mb-3">
      <label for="contraseña" class="form-label">Crea tu contraseña</label>
      <input type="password" class="form-control" id="contraseña" name="pass" placeholder="***********">
      <?php if($validation->getError('pass')){?><div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('pass');?>
      </div>
      <?php } ?>
    </div>
    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento</label>
      <input type="date" class="form-control" id="fecha" name="nacimiento"  max="2025-12-31" min="1900-01-01">
      <?php if($validation->getError('nacimiento')) { ?><div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('nacimiento');?>
      </div>
      <?php } ?>
    </div>  
    <div class="mb-3">
      <label class="form-label">¿Aceptas términos y condiciones?</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="acepta_terminos" id="si" value="1">
        <label class="form-check-label" for="si">Sí</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="acepta_terminos" id="no" value="0">
        <label class="form-check-label" for="no">No</label>
      </div>
      <?php if($validation->getError('acepta_terminos')) { ?><div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('acepta_terminos');?>
      </div>
      <?php } ?>
    </div>
    <button type="submit" value="guardar"class="btn btn-primary w-100 fw-bold">Enviar</button>
    <button type="reset" value="cancelar"class="btn mt-2 btn-secondary w-100">Cancelar</button>
  </form>
</section>



