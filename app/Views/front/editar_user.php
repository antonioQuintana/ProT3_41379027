<!--Esta vista se mostrará sin formato para que el Admin pueda modificar los datos-->

<div class="container my-5">
    <h2>Editar usuario</h2>
    <form method="post" action="<?= base_url('admin/usuario/actualizar/'.$usuario['id_usuario']) ?>">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="nombre_ape" class="form-label">Nombre y Apellido</label>
            <input type="text" class="form-control" id="nombre_ape" name="nombre_ape" value="<?= esc($usuario['nombre_ape']) ?>">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?= esc($usuario['telefono']) ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= esc($usuario['email']) ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="perfil_id" class="form-label">Perfil</label>
            <select class="form-control" id="perfil_id" name="perfil_id">
                <option value="1" <?= $usuario['perfil_id']==1?'selected':''; ?>>Admin</option>
                <option value="2" <?= $usuario['perfil_id']==2?'selected':''; ?>>Usuario</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="baja" class="form-label">Baja</label>
            <select class="form-control" id="baja" name="baja">
                <option value="NO" <?= $usuario['baja']=='NO'?'selected':''; ?>>NO</option>
                <option value="SI" <?= $usuario['baja']=='SI'?'selected':''; ?>>SI</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="<?= base_url('panel') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>