<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesion con tus Datos</p>

<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<form action="/public/" method="POST" class="formulario">
<div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            placeholder="Tu Email"
            name="email"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Password"
            name="password"
        />
    </div>
    <input type="submit" class="boton" value="Iniciar Sesion">
</form>

<div class="acciones">
    <a href="/public/crearcuenta">¿Aun no tienes Cuenta? Crea Una</a>
    <a href="/public/olvide">¿Olvidaste tu Password?</a>
</div>