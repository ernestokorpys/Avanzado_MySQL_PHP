<section id="login">
    <form action="validar_cliente.php" method="POST" class="formulario">
        <div class="title">Bienvenido</div>
        <div class="subtitle">Ingrese a su cuenta!</div>
        <div class="input-container ic2">
            <input type='email' id="email" class="input" name="mail_user" type="text" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="email" class="placeholder">Correo Electrónico</>
        </div>
        <div class="input-container ic1">
            <input id="firstname" class="input" name="password_user" type="password" placeholder=" " />
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Contraseña</label>
        </div>
        <input type="submit" class="submit" value="Confirmar">
    </form>
</section>