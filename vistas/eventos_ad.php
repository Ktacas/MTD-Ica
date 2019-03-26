<?php
require 'header.php';
?>

<h1 class="box-title">Eventos <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
<div id="listadoregistros">
<table id="tbllistado">
    <thead>
      <th class="num">IDtitulo</th>
      <th class="sections">Imagen</th>
      <th class="title">Titulo</th>
      <th class="title">SubTitulo</th>
      <th class="sections">Descripcion</th>
    </thead>
    <tbody>                            
    </tbody>
    <tfoot>
      <th class="num">IDtitulo</th>
      <th class="sections">Imagen</th>
      <th class="title">Titulo</th>
      <th class="title">SubTitulo</th>
      <th class="sections">Descripcion</th>
    </tfoot>
</table>
</div>


<div   id="formularioregistros">
    <form name="formulario" id="formulario" method="POST">
      <div>
        <label>Titulo:</label>
        <input type="" name="ID_titulo" id="ID_titulo">
        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="50" placeholder="Titulo" required>
      </div>

      <div>
        <label>SubTitulo:</label>
        <input type="text" class="form-control" name="subtitulo" id="subtitulo" maxlength="50" placeholder="Subtitulo" required>
      </div>

      <div>
        <label>Fecha:</label>
        <input type="date"  name="fecha" id="fecha" required>
      </div>

      <div>
        <label>Hora:</label>
        <input type="time"  name="hora" id="hora" required>
      </div>

      <div>
        <label>Imagen:</label>
        <input type="file" name="imagen" id="imagen" stile="display: none" required> 
        <span style="Color: Red;">Tamaño Máximo: 2,048KB</span>
      </div>

      <div class="description">
        <label>Descripción:</label>
        <textarea name="descripcion" id="descripcion" rows="5" cols="40" placeholder="Descripción" maxlength="140" required></textarea>
      </div>

      <div>
        <label>Lugar:</label>
        <input type="text"  name="lugar" id="lugar" placeholder="Lugar del evento" required>
      </div>

      <div>
        <label>Enlace Mapa:</label>
        <input type="text"  name="enlace" id="enlace" placeholder="Link de google maps" required>
      </div>

      <div>
        <label>Estado:</label>
        <input type="text" name="estado" id="estado" placeholder="ACTIVO O FINALIZADO" required> 
      </div>

      <div class="buttons">
        <button class="btn btn-primary" type="submit" id="btnGuardar" name="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
        <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
      </div>
    </form>
</div>
</div>

<?php
require 'footer.php';
?>
<script type="text/javascript" src="scripts/eventos_ad.js"></script>