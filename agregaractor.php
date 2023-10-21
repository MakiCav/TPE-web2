<form action="router.php?action=agregarActor" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input required name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Apellido</label>
                <input required name="apellido" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Nacionalidad</label>
                <input required name="nacionalidad" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Fecha de Nacimiento</label>
                <input required name="nacimiento" type="date" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Imagen</label>
                <input required name="imagen" type="text" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>