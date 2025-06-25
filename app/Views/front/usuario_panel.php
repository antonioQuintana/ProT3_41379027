<!--   Esta vista se mostrara luego de iniciar sesión 
para que el usuario pueda actualizar sus datos  -->

<div class="container my-5">
    <h2 class="text-white">Actualizar mis datos</h2>
    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-info"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <?php $validation = \Config\Services::validation(); ?>
    <form method="post" action="<?= base_url('actualizar-perfil') ?>" class="border rounded-3 bg-light p-4 shadow mx-auto" style="max-width: 500px;">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre_ape" value="<?= esc(session()->get('nombre_ape')) ?>" placeholder="Ej. Antonio Quintana">
            <?php if($validation->getError('nombre_ape')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('nombre_ape'); ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="<?= esc(session()->get('telefono')) ?>" placeholder="Ej. 3794-000000">
            <?php if($validation->getError('telefono')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('telefono'); ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="correo" name="email" value="<?= esc(session()->get('email')) ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Crea tu contraseña</label>
            <input type="password" class="form-control" id="contraseña" name="pass" placeholder="***********">
            <?php if($validation->getError('pass')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('pass'); ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha" name="nacimiento" value="<?= esc(session()->get('nacimiento')) ?>" max="2025-12-31" min="1900-01-01">
            <?php if($validation->getError('nacimiento')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('nacimiento'); ?></div>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary w-100 fw-bold">Actualizar</button>
        <button type="reset" class="btn mt-2 btn-secondary w-100">Cancelar</button>
    </form>
</div>