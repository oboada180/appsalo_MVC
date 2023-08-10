<div class="barra">
    <p>Hola: <?php echo $nombre ?? '';?> </p>
    <a class="boton" href="/public/logout">Cerrar Sesion</a>
</div>

<?php if(isset($_SESSION['admin'])) { ?>
    <div class="barra-servicio">
        <a class="boton" href="/public/admin">Ver Citas</a>
        <a class="boton" href="/public/servicios">Servicios</a>
        <a class="boton" href="/public/servicios/crear">Nuevos Servicio</a>
    </div>
<?php }?>