<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu Password Escribiendo tu Email a Continuacion</p>

<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<form action="/public/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
    </div>

    <input type="submit" class="boton" value="Enviar Email">
</form>

<div class="acciones">
    <a href="/public/">¿Ya tienes una Cuenta? Inicia Sesion</a>
    <a href="/public/crearcuenta">¿Aun no tienes Cuenta? Crea Una</a>
</div>