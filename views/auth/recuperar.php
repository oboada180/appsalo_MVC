<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo Password a Continuacion</p>

<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<?php if($error) return; ?>
<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Nuevo password" name="password">
    </div>

    <input type="submit" class="boton" value="Guardar Nuevo Password">
</form>

<div class="acciones">
    <a href="/public/">¿Ya tienes una Cuenta? Inicia Sesion</a>
    <a href="/public/crearcuenta">¿Aun no tienes Cuenta? Crea Una</a>
</div>