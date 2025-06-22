<!-- Formulario de registro-->
<section id="registrarse" class="container my-5">
  <h3 class="text-center text-white mb-4">Registrarse</h3>
  <form method="post" class="border rounded-3 bg-light p-4 shadow mx-auto" style="max-width: 500px;">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Antonio Quintana">
    </div>
    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ej. 3794-000000">
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="correo" name="correo-elec" placeholder="correo.ejemplo@gmail.com">
    </div>
    <div class="mb-3">
      <label for="contraseña" class="form-label">Crea tu contraseña</label>
      <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="***********">
    </div>
    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento</label>
      <input type="date" class="form-control" id="fecha" name="fecha"  max="2025-12-31" min="1900-01-01">
    </div>  
    <div class="mb-3">
      <label class="form-label">¿Aceptas términos y condiciones?</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="term-cond" id="si" value="si">
        <label class="form-check-label" for="si">Sí</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="term-cond" id="no" value="no">
        <label class="form-check-label" for="no">No</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary w-100 fw-bold">Enviar</button>
    <button type="reset" class="btn mt-2 btn-secondary w-100">Cancelar</button>
  </form>
</section>

