<?php
require 'header.php';
?>
<style>
  th {
    background-color: #384556; color: white;
}
  td {
    background-color: #E8E8E8; color: black;
}

</style>

<!-- Listado del blog -->
<button id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
<div id="listadoregistros"> 
    <table id="tbllistado">
    <thead>
      <th class="num">IDtitulo</th>
      <th class="sections">Imagen</th>
      <th class="title">Titulo</th>
      <th class="sections">Descripcion</th>
      <th class="sections">Categoria</th>
    </thead>
    <tbody>                            
    </tbody>
    <tfoot>
      <th class="num">IDtitulo</th>
      <th class="sections">Imagen</th>
      <th class="title">Titulo</th>
      <th class="sections">Descripcion</th>
      <th class="sections">Categoria</th>
    </tfoot>
    </table>
</div>

<!-- Registro de blogs -->
<div   id="formularioregistros">
    <form name="formulario" id="formulario" method="POST">
      <div>
        <label>Titulo:</label>
        <input type="hidden" name="ID_titulo" id="ID_titulo">
        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="50" placeholder="Titulo" required>
      </div>

      <div>
        <label>Fecha:</label>
        <input type="date"  name="fecha" id="fecha" required>
      </div>
      <div>

        <label>Enlace:</label>
        <input type="text"  name="enlace" id="enlace" placeholder="Enlace" required>
      </div>

      <div>
        <label>Categoria:</label>
        <input type="text"  name="categoria" id="categoria" maxlength="256" placeholder="Categoria" required>
      </div>

      <div class="description">
        <label>Descripción:</label>
        <textarea name="descripcion" id="descripcion" rows="5" cols="40" placeholder="Descripción" maxlength="140" required></textarea>
      </div>
      
      <div class="container_content">
        <label>Contenido:</label>
        <textarea name="contenido" id="contenido" rows="18" cols="120" placeholder="Contenido" maxlength="1100" placeholder="Contenido" required></textarea>
      </div>

      <div class="buttons">
        <button class="btn btn-primary" type="submit" id="btnGuardar" name="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
        <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
      </div>
    </form>
</div>

<?php
require 'footer.php';
?>
<!-- DATATABLES -->
<script type="text/javascript" src="../public/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../public/js/Spanish.json"></script>

<script type="text/javascript" src="scripts/adminB.js"></script>
