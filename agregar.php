<?php include_once('header.php');
require_once './funciones.php'; ?>
<form action="router.php?action=agregarMovie" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Título</label>
                <input required name="titulo" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Genero</label>
                <input required name="genero" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Director</label>
                <input required name="director" type="text" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Fecha de Estreno</label>
                <input required name="estreno" type="date" class="form-control">
            </div>
        </div>
        <div class="col-9">
            <div class="form-group">
                <label>Duracion</label>
                <input required name="duracion" type="time" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Actor:</label>
                <select required name="actor1" class="form-control">
                <?php
                require_once("db.php");
                $actores = getActores();
                foreach ($actores as $actor) {
                  echo "<option>$actor->Nombre $actor->Apellido</option>";
                }
                ?>
                </select>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Actor:</label>
                <select required name="actor2" class="form-control">
                <?php
                require_once("db.php");
                $actores = getActores();
                foreach ($actores as $actor) {
                  echo "<option>$actor->Nombre $actor->Apellido</option>";
                }
                ?>
                </select>
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

<?php 


showMoviesAdmin();