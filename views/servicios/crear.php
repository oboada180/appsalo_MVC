<h1 class="nombre-pagina">Nuevo Servicio</h1>
<p class="descripcion-pagina">Llena el Formulario para crear Nuevo Servicio</p>

<?php include_once __DIR__.'/../templates/barra.php'; ?>
<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<form action="/public/servicios/crear" method="post">

    <?php include_once __DIR__.'/formulario.php'; ?>

    <input type="submit" class="boton" value="Guardar Servicio">

</form>